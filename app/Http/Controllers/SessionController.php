<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }
    
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'identity' => 'required',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/'
        ], [
            'identity.required' => 'Email or Name is required',
            'password.required' => 'Password is required',
            'password.regex' => 'The password must contain at least 1 uppercase letter, 1 lowercase letter, and 1 digit.'
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = [
            'password' => $request->password
        ];

        if (filter_var($request->identity, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $request->identity;
        } else {
            $credentials['nama'] = $request->identity;
        }

        if (Auth::attempt($credentials)) {
            return redirect("/admin/dashboard");
        } else {
            return redirect('/login')->with('error', 'Invalid email, name, or password');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}