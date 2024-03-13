<?php

namespace App\Interfaces;

Interface PaymentMethod {

    public function processPayment($amount);

}
