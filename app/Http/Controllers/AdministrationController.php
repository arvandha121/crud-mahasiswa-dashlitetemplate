<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdministrationController extends Controller
{
    // public function index() {
    //     $data = Users::all();
    //     return view('users/users')->with('data', $data);
    // }

    public function index(Request $request){
        $query = $request->input('search');

        $data = Users::query()
            ->when($query, function ($q) use ($query) {
                // Add the filter condition for the search query
                $q->where('nama', 'like', '%' . $query . '%')
                ->orWhere('email', 'like', '%' . $query . '%');
            })
            ->get();

        return view('admin/users/users', compact('data'));
    }

    public function create()
    {
        return view('/admin/users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        Users::create([
            'nama' => $validatedData['nama'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return redirect()->route('administration.index')
            ->with('success', 'User created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = Users::findOrFail($id);

        // Validate input data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8', // Allow password to be nullable
        ]);

        // Update user attributes
        $user->update($validatedData);

        // Update password if provided
        if (!empty($validatedData['password'])) {
            $user->update(['password' => Hash::make($validatedData['password'])]);
        }

        return redirect()->route('administration.index')
            ->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $user = Users::findOrFail($id);
        $user->delete();

        return redirect()->route('administration.index')
            ->with('success', 'User deleted successfully');
    }
}