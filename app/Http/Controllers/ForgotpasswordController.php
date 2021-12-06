<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotpasswordController extends Controller
{
    function index()
    {
        return view('login.forgot-password', [
            'title' => 'Lupa Password'
        ]);
    }
}
