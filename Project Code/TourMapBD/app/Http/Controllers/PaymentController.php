<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class PaymentController extends Controller{
    public function pay(Request $request){
        \Stripe\Stripe::setApiKey('sk_test_zXN6iqBQnZ8FX4xKzHBoX7DG00gaRzlHWA');
        $token = $request->stripeToken;
    }
}