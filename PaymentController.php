<?php

namespace App\Http\Controllers\Dep;

class PaymentController
{
    public function index()
    {
        $paymentProcess = new PaymentProcess(new PaypalPaymentMethod());
        $paymentProcess->pay();
    }
}
