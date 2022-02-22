<?php

use App\Http\Controllers\PriceBtcController;
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
    return view('home', [
         "data" => "data Dari route",
         "title" => "Home",
         "link" => "../crypto-logging"
    ]);
});

Route::get('/crypto-logging', [PriceBtcController::class, 'index']);