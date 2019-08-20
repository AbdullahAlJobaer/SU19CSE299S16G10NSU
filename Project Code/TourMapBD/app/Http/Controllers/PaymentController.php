<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;


class PaymentController extends Controller{
    public function pay(Request $request){
        \Stripe\Stripe::setApiKey('sk_test_zXN6iqBQnZ8FX4xKzHBoX7DG00gaRzlHWA');
        $token = $request->stripeToken;
        try{
            $charge = \Stripe\Charge::create([
                'amount' => $request->amount * 100,
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' => $token,
            ]);
            return back()->with('status','Payment successful.');
        } catch(\Stripe\Error\Base $e){
            return back()->with('status','Payment Unsuccessful. '.$e->getMessage());
        }

    }

    public function create(){
        return view('payment');
    }
}