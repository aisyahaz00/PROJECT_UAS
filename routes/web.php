<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;

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
    return view('auth.pages.Home', [
        "title" => "Beranda",
        "active" => "home"
    ]);
});

Route::get('/cart', function () {
    return view('auth.pages.Cart', [
        "title" => "Keranjang",
        "active" => "Keranjang"
    ]);
});

