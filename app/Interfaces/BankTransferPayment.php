<?php

namespace App\Interfaces;

Class BankTransferPayment implements PaymentMethod{
    public function processPayment($amount)
    {
        return 'bank transfer payment';
    }
}
