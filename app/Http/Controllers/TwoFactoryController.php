<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactoryController extends Controller
{
    public function index()
    {
        return view('auth.verify');
    }
}
