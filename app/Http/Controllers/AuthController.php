<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        return view("auth.login");
    }

    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/admin')->with('message', 'You are now logged in.');
        }

        return back()->withErrors(['name' => 'Invalid credentials'])->onlyInput('name');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
