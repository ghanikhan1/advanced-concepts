<?php

namespace App\Http\Controllers;

use App\Interfaces\BankTransferPayment;
use App\Interfaces\PaymentProcessor;
use App\Interfaces\CreditCardPayment;

use App\Interfaces\PaypalPayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function processPayment(PaymentProcessor $paymentProcessor)
    {
//        $amount = 100;
        $creditCard = new CreditCardPayment();
        $bankTransfer = new BankTransferPayment();
        $paypal = new PaypalPayment();

        $creditCardAmount = $paymentProcessor->executePayment($creditCard, $amount = 100);
        $bankTransferAmount = $paymentProcessor->executePayment($bankTransfer, $amount = 200);
        $paypalAmount = $paymentProcessor->executePayment($paypal, $amount = 300);
//        dd($result);
        return view('payment', ['creditCardAmount' => $creditCardAmount, 'bankTransferAmount' => $bankTransferAmount, 'paypalAmount' => $paypalAmount]);
    }
}
