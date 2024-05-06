<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('create-stripe',[StripeController::class, 'createStripe'])->name('create.stripe');
Route::post('store-stripe',[StripeController::class, 'storeStripe'])->name('store.stripe');
// use Illuminate\Http\Request;
 
// Route::get('/checkout', function (Request $request) {
//     $stripePriceId = 'price_deluxe_album';
 
//     $quantity = 1;
 
//     return $request->user()->checkout([$stripePriceId => $quantity], [
//         'success_url' => route('checkout-success'),
//         'cancel_url' => route('checkout-cancel'),
//     ]);
// })->name('checkout');
 
// Route::view('checkout.success')->name('checkout-success');
// Route::view('checkout.cancel')->name('checkout-cancel');


