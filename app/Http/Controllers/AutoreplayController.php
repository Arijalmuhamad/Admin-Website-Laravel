<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoreplayController extends Controller
{
    function index()
    {
        return view('replay', [
            'title' => 'Auto Replay'
        ]);
    }
}
