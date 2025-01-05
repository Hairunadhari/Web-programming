<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('landing-page.checkout');
    }
    
    public function sukses(){
        return view('landing-page.checkout_sukses');
    }
}
