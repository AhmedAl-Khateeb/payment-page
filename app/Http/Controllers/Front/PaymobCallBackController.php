<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PaymentLog;
use App\Models\Transaction;
use Illuminate\Http\Request;

class PaymobCallBackController extends Controller
{
    public function callback(Request $request)
    {
        PaymentLog::create([
            'event' => 'paymob_callback',
            'payload' => $request->all(),
        ]);

        $success = data_get($request->all(), 'obj.success');

        $paymobOrderId = data_get(
            $request->all(),
            'obj.order.id'
        );

        $transactionId = data_get(
            $request->all(),
            'obj.id'
        );

        $transaction = Transaction::where(
            'paymob_order_id',
            $paymobOrderId
        )->first();

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found',
            ], 404);
        }

        $transaction->update([
            'transaction_id' => $transactionId,
            'status' => $success ? 'success' : 'failed',
        ]);

        if ($transaction->order) {
            $transaction->order->update([
                'status' => $success ? 'paid' : 'failed',
                'paid_at' => $success ? now() : null,
            ]);
        }

        return response()->json([
            'success' => true,
        ]);
    }

    public function response(Request $request)
    {
        $success = filter_var($request->success, FILTER_VALIDATE_BOOLEAN);

        if ($success) {
            return redirect()
                ->route('front.home')
                ->with('success', 'Payment completed successfully');
        }

        return redirect()
            ->route('front.home')
            ->with('error', 'Payment failed');
    }
}
