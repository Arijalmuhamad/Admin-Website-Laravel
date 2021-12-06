<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BroadcastController extends Controller
{
    function index()
    {
        return view('broadcast', [
            'title' => 'Broadcast'
        ]);
    }
}
