<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class SessionController extends Controller
{
    function index(){
        return view('auth/login');
    }
    
    function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);
    
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
    
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            $user = User::where('email', $request->email)->first();
            return redirect("/admin/dashboard")->with('userName', $user->name);
        } else {
            return redirect('/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // This will invalidate the user's token and log them out.
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
