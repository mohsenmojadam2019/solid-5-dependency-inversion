<?php

namespace App\Http\Controllers\Dep;

interface PaymentMethodInterface
{
    public function makePayment();
}
