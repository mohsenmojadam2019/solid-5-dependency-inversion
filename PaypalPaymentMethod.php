<?php

namespace App\Http\Controllers\Dep;

class PaypalPaymentMethod implements PaymentMethodInterface
{
    public function makePayment()
    {
        echo 'Paypal payment method';
    }
}
