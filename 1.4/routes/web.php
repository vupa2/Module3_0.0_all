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
    return view('dictionary');
});

Route::post('/', function (Request $request) {
    $dictionary = [
        'Cat' => 'Mèo',
        'Dog' => 'Chó'
    ];

    $english = ucwords(strtolower($request->english));
    $vietnamese = $dictionary[$english] ?? 'Không dịch được';

    return view('dictionary', compact('english', 'vietnamese'));
});
