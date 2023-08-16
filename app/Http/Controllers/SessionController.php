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
            'email' => 'required|email',
            'password' => 'required|string|min:8|regex:/^(?=.*[A-Z])(?=.*\d).+$/'
        ], [
            'email.required' => 'E-mail is required',
            'email.email' => 'Invalid e-mail format',
            'password.required' => 'Password is required',
            'password.regex' => 'The password must contain at least 1 uppercase letter, 1 lowercase letter, and 1 digit.'
        ]);

        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            return redirect("/admin/dashboard")->with('userName', $user->name);
        } else {
            return redirect('/login')->with('error', 'Invalid email or password');
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