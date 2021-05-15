<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register')
    }
}
