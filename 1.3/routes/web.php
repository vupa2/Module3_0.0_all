<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('show_discount_amount');
});

Route::post('/', function (Request $request) {
    $productDescription = $request->productDescription;
    $price = $request->price;
    $discountPercent = $request->discountPercent;

    $discountAmount = $price * $discountPercent * 0.01;
    $discountPrice = $price - $discountAmount;

    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});
