<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Stripe;
use Stripe\Stripe as StripeStripe;

class StripeController extends Controller
{
   public function createStripe(){
       return view('transaction');
   }

   public function storeStripe(Request $request)
   {
       Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
       Stripe\Charge::create([
           'amount' => 100*100,
           'currency'=>"usd",
           'source'=> $request->stripeToken,
           'description' =>'Test payment from muhammed essa'
       ]);

       Session::flash('success','Payment has been successfully');
       return back();
   }
}
