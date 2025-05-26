<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TwoFactoryController extends Controller
{
    public function index()
    {
        return view('auth.verify');
    }

    public function store(Request $request)
    {
        $user = auth()->user();
        if ($request->input('code') == $user->code){
            $user->resetCode();
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors(['code'=> 'your OTP code is invalid!']);
    }
}
