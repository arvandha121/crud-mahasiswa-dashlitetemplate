<?php

namespace App\Http\Controllers;

use App\Exports\MahasiswaExport;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Dompdf\Dompdf as PDF;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request)
     {
         $search = $request->input('search');
         $data = Mahasiswa::query();
     
        if ($search) {
             $data = $data->where('nim', 'LIKE', "%$search%")
                 ->orWhere('nama', 'LIKE', "%$search%")
                 ->orWhere('tanggal_lahir', 'LIKE', "%$search%")
                 ->orWhere('jenis_kelamin', 'LIKE', "%$search%")
                 ->orWhere('alamat', 'LIKE', "%$search%")
                 ->orWhere('kota', 'LIKE', "%$search%");
         }
     
         // Get the current sort order from the URL query parameter
        $sortOrder = $request->input('sort', 'asc');

        // Order the data based on the sort order
        $data = $data->orderBy('id', $sortOrder)->paginate(10);

        // Get the distinct list of cities for filtering
        $kotaList = Mahasiswa::distinct('kota')->pluck('kota');

        // Pass the search query and sort order to the pagination links
        $data->appends(['search' => $search, 'sort' => $sortOrder]);

        return view("/admin/mahasiswa/mahasiswa", compact('data', 'kotaList', 'sortOrder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/mahasiswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nim'=>'required|numeric',
                'nama'=>'required',
                'tanggal_lahir'=>'required',
                'jenis_kelamin'=>'required',
                'alamat'=>'required',
                'kota'=>'required',
            ]
        );
        $data = [
            'nim'=>$request->input('nim'),
            'nama'=>$request->input('nama'),
            'tanggal_lahir'=>$request->input('tanggal_lahir'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'alamat'=>$request->input('alamat'),
            'kota'=>$request->input('kota'),
        ];
        Mahasiswa::create($data);
        return redirect('/admin/data/mahasiswa')->with('success', 'Data mahasiswa berhasil diupload.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mahasiswa::where('id', $id)->first();
        return view('admin/mahasiswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::where('id', $id)->first();
        return view('admin/mahasiswa/edit')->with('data', $data);
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
        $request->validate(
            [
                'nim'=>'required|numeric',
                'nama'=>'required',
                'tanggal_lahir'=>'required',
                'jenis_kelamin'=>'required',
                'alamat'=>'required',
                'kota'=>'required',
            ]
        );
        $data = [
            'nim'=>$request->input('nim'),
            'nama'=>$request->input('nama'),
            'tanggal_lahir'=>$request->input('tanggal_lahir'),
            'jenis_kelamin'=>$request->input('jenis_kelamin'),
            'alamat'=>$request->input('alamat'),
            'kota'=>$request->input('kota'),
        ];
        Mahasiswa::where('id', $id)->update($data);
        return redirect('/admin/data/mahasiswa')->with('success', 'Berhasil melakukan update data.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect('/admin/data/mahasiswa')->with('success', 'Berhasil melakukan hapus data.');
    }

    public function filters(Request $request)
    {
        $kota = $request->input('kota');

        $data = Mahasiswa::query();

        if ($kota) {
            $data = $data->where('kota', $kota);
        }

        $data = $data->orderBy('id', 'asc')->get();

        $data = Mahasiswa::select('kota')
                ->orderBy('id', 'asc')
                ->distinct()
                ->get();

        return view('/mahasiswa/table', compact('data', 'kotaList'));
    }

    public function cetak_pdf() {
        $data = Mahasiswa::all();
        $pdf = new PDF();
        $html = view('admin/cetak_pdf', compact('data'))->render();
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();

        return $pdf->stream();
    }

    public function cetak_excel()
	{
		return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
	}
}
