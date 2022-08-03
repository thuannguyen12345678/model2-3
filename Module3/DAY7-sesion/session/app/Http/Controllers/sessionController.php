<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SNMP;

class sessionController extends Controller
{
    function create(){
        // theem:
        session(['key' => 'value']);

        //sua:
        $cart = session($cart);


        //xoa:

        session()->forget($cart);
    }
}
