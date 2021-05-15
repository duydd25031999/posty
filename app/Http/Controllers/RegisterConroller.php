<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RegisterConroller extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'username' => 'required|confirmed',
        ]);
    }
}
