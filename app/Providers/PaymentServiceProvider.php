<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PaymentMethod;
use App\Interfaces\CreditCardPayment;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PaymentMethod::class, function ($app) {
            // Return the default PaymentMethod implementation you want to use
//            return new CreditCardPayment();
            return new PaypalPayment();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
