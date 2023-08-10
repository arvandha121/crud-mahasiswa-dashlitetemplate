<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CitiesExport;

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

        return view('admin/kota/kota', compact('data', 'kota'));
    }

    public function downloadPDF(PDF $pdf)
    {
        $data = Mahasiswa::query()
            ->select('kota', DB::raw('count(*) as total_count'))
            ->groupBy('kota')
            ->orderBy('id', 'asc')
            ->get();

        $pdf = $pdf->loadView('admin.pdf', compact('data'));
        return $pdf->download('cities.pdf');
    }

    public function downloadExcel()
    {
        return Excel::download(new CitiesExport(), 'cities.xlsx');
    }
}
