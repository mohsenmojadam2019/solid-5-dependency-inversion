<?php

namespace App\Http\Controllers\Dep;

class PaymentProcess
{
    protected $paymentMethod;
    public function __construct(PaymentMethodInterface $paymentMethod)// تشخیص میدهد از کدام کلاس استفاده کنند
    {
        $this->paymentMethod = $paymentMethod;
    }
    public function pay()
    {
        $this->paymentMethod->makePayment();
    }
}
