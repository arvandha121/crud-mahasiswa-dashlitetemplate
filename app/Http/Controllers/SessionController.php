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
            'nama' => 'required',
            'password' => 'required'
        ], [
            'nama.required' => 'nama wajib diisi',
            'nama.nama' => 'Format nama tidak valid',
            'password.required' => 'Password wajib diisi'
        ]);
    
        if ($validator->fails()) {
            return redirect('/login')
                ->withErrors($validator)
                ->withInput();
        }
    
        $credentials = [
            'nama' => $request->nama,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            $user = User::where('nama', $request->nama)->first();
            return redirect("/admin/dashboard")->with('userName', $user->name);
        } else {
            return redirect('/login');
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