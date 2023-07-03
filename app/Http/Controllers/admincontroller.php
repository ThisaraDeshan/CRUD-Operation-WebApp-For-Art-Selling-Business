<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
}
