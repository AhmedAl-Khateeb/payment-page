<?php

namespace App\Service\Front;

use Illuminate\Support\Facades\Http;

class PaymobService
{
    protected string $apiKey;
    protected string $integrationId;
    protected string $iframeId;

    public function __construct()
    {
        $this->apiKey = config('services.paymob.api_key');
        $this->integrationId = config('services.paymob.integration_id');
        $this->iframeId = config('services.paymob.iframe_id');
    }

    public function authenticate()
    {
        $response = Http::post(
            'https://accept.paymob.com/api/auth/tokens',
            [
                'api_key' => $this->apiKey,
            ]
        );

        return $response->json()['token'];
    }

    public function createOrder($token, $amountCents)
    {
        $response = Http::post(
            'https://accept.paymob.com/api/ecommerce/orders',
            [
                'auth_token' => $token,
                'delivery_needed' => false,
                'amount_cents' => $amountCents,
                'currency' => 'EGP',
                'items' => [],
            ]
        );

        return $response->json();
    }

    public function generatePaymentKey(
        $token,
        $orderId,
        $amountCents,
        $billingData
    ) {
        $response = Http::post(
            'https://accept.paymob.com/api/acceptance/payment_keys',
            [
                'auth_token' => $token,
                'amount_cents' => $amountCents,
                'expiration' => 3600,
                'order_id' => $orderId,
                'billing_data' => $billingData,
                'currency' => 'EGP',
                'integration_id' => $this->integrationId,
            ]
        );

        return $response->json()['token'];
    }

    public function getIframeUrl($paymentToken)
    {
        return "https://accept.paymob.com/api/acceptance/iframes/{$this->iframeId}?payment_token={$paymentToken}";
    }
}
