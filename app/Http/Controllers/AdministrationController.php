<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

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
}