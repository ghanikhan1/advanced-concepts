<?php

namespace App\Interfaces;

Class PaypalPayment implements PaymentMethod{
    public function processPayment($amount)
    {
        return 'paypal payment';
    }
}
