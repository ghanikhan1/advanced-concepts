<?php

namespace App\Http\Controllers;

use App\Interfaces\PaymentProcessor;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $paymentProcessor;

    // Inject PaymentProcessor into the controller
    public function __construct(PaymentProcessor $paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }

    public function processPayment(Request $request)
    {
        $amount = $request->input('amount', 100); // Default amount to 100 if not provided
        $method = $request->input('method', 'credit'); // Default method to 'credit' if not provided

        // Dynamically resolve the payment method based on request
        switch ($method) {
            case 'credit':
                $paymentMethod = resolve('App\Interfaces\CreditCardPayment');
                break;
            case 'paypal':
                $paymentMethod = resolve('App\Interfaces\PaypalPayment');
                break;
            case 'bank':
                $paymentMethod = resolve('App\Interfaces\BankTransferPayment');
                break;
            default:
                return response()->json(['error' => 'Invalid payment method'], 400);
        }

        // Execute the payment
        $result = $this->paymentProcessor->executePayment($paymentMethod, $amount);
//        return response()->json(['message' => 'Payment processed successfully']);
        return view('payment', ['result' => $result]);

    }
}
