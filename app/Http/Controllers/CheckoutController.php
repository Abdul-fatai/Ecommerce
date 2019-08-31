<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

use Cart;
use Mail;
use Session;

class CheckoutController extends Controller
{
    public function index(){

        if(Cart::content()->count() == 0){
            Session::flash('info', 'Your cart is still empty. make some shopping ');
            return redirect()->back();
        }

        return view('checkout');
    }

    public function pay(){
        
        Stripe::setApiKey('sk_test_9XbFZZ9m2aiCUoNn3zRaKRk8007TcI5m9f');

        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'Ecommerce shop - Books',
            'source' =>  request()->stripeToken
        ]);

        Session::flash('success', 'Purchase successfully made, wait for our mail');

        Cart::destroy();
        
        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

        return redirect('/');
    }
}
