<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PriceBTC;

class PriceBtcController extends Controller
{
    public function index(){
         return view('crypto-logging', [
         "data" => "data Dari route",
         "title" => "Crypto Loggging",
         "link" => "../crypto-logging",
         "prices" => PriceBTC::all(),
          ]);
    }
}
