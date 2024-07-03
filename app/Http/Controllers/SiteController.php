<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function login(Request $request) {
        // validate here...

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            // return dashboard view

            return view('dashboard');
        }

        return view('login-error');
    }
}
