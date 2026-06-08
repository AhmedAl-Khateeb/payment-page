<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Transaction;
use App\Service\Front\PaymobService;
use Illuminate\Http\Request;

class PaymobController extends Controller
{
    public function __construct(
        protected PaymobService $paymobService
    ) {
    }

    public function checkoutForm()
    {
        return view('front.checkout');
    }

    public function pay(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'phone' => 'required',
        ]);

        $user = auth()->user();

        // 👇 السعر ثابت أو من DB
        $amount = 100;

        $order = Order::create([
            'user_id' => $user?->id,
            'order_number' => 'ORD-'.time().rand(1000, 9999),
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'subtotal' => $amount,
            'total' => $amount,
            'status' => 'pending',
            'payment_method' => 'paymob',
        ]);

        return $this->startPayment($order, (float) $amount, $user);
    }

    protected function startPayment(
        Order $order,
        float $amount,
        $user
    ) {
        $amountCents = (int) ($amount * 100);

        $token = $this->paymobService->authenticate();

        $paymobOrder = $this->paymobService->createOrder(
            $token,
            $amountCents
        );

        Transaction::create([
            'order_id' => $order->id,
            'paymob_order_id' => $paymobOrder['id'],
            'amount' => $amount,
            'status' => 'pending',
            'payment_method' => 'paymob',
        ]);

        // dd([
        //     'integration_id' => config('services.paymob.integration_id'),
        //     'iframe_id' => config('services.paymob.iframe_id'),
        // ]);

        $paymentToken = $this->paymobService->generatePaymentKey(
            $token,
            $paymobOrder['id'],
            $amountCents,
            [
                'first_name' => $user?->name ?? 'Guest',
                'last_name' => $user?->name ?? 'Guest',
                'email' => $user?->email ?? 'guest@example.com',
                'phone_number' => $user?->phone ?? '01000000000',
                'apartment' => 'NA',
                'floor' => 'NA',
                'street' => 'NA',
                'building' => 'NA',
                'shipping_method' => 'NA',
                'postal_code' => 'NA',
                'city' => 'Cairo',
                'country' => 'EG',
                'state' => 'Cairo',
            ]
        );

        return redirect(
            $this->paymobService->getIframeUrl($paymentToken)
        );
    }
}
