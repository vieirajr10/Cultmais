<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected function redirectToHome()
    {
        if (Auth::check()) {
            return redirect()->route('local.create');
        } else {
            return redirect()->route('login.form');
        }
    }
}
