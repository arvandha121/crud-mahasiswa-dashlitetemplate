<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    public function index(Request $request) {
        $kota = $request->input('kota');
        $data = Mahasiswa::query();

        if ($kota) {
            $data = $data->where('kota', 'LIKE', "%$kota%");
        }

        $data = $data->select('kota', DB::raw('count(*) as total_count'))
            ->groupBy('kota')
            ->orderBy('id', 'asc')
            ->get();

        return view('kota/kota', compact('data', 'kota'));
    }
}
