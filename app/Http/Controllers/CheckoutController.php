<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function login_check()
    {
        return view('pages.login');
    }
}
