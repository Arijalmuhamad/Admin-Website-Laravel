<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class DashboardController extends Controller
{
    function index()
    {
        if (Auth::check()) {
            return view('dashboard', [
                'title' => 'Dashboard'
            ]);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }
}
