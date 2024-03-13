<?php

namespace App\Interfaces;

Class CreditCardPayment implements PaymentMethod{
    public function processPayment($amount)
    {
        return 'credit card payment';
    }
}
