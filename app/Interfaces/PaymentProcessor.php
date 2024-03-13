<?php
namespace App\Interfaces;



use App\Interfaces\PaymentMethod;

Class PaymentProcessor{
    public function executePayment(PaymentMethod $paymentMethod, $amount )
    {
        $result = $paymentMethod->processPayment($amount);
        return "Payment processed: " . $result . " for amount $" . $amount . PHP_EOL;
    }
}
