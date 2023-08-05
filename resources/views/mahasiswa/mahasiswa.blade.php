@extends('app')

@section('content')
    <!-- content -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-5 mt-3">
                        <form action="{{ route('mahasiswa.index') }}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="search..." name="search"
                                    value="{{ request('search') }}">
                                <button class="btn btn-success" type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end col-md-7 text-md-end mb-3 ">
                        <a href="/admin/data/mahasiswa/create" class="btn btn-primary mt-3 ml-2">
                            + Tambah Data
                        </a>
                        <a href="/cetak_pdf" class="btn btn-danger mt-3 ml-2" style="margin-left: 5px"><span><i
                                    class="fa fa-print"></i></span></a>
                        <a href="/cetak_excel" class="btn btn-success mt-3 ml-2" style="margin-left: 5px"><span><i
                                    class="fa fa-file"></i></span></a>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" onchange="filterData()">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select name="kota" id="kota" class="form-control">
                            <option value="">Pilih Kota</option>
                            @foreach ($kotaList as $kota)
                                <option value="{{ $kota }}">{{ $kota }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                {{-- <th scope="col">NO</th> --}}
                                <th scope="col">ID</th>
                                <th scope="col">NIM</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">TANGGAL LAHIR</th>
                                <th scope="col">JENIS KELAMIN</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">KOTA</th>
                                <th scope="col">DETAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    {{-- <td>{{ $loop->iteration }}</td> --}}
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->tanggal_lahir }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->kota }}</td>
                                    <td>
                                        <a class="btn btn-outline-secondary btn-sm"
                                            href="{{ url('/admin/data/mahasiswa/' . $item->id) }}">
                                            <span><i class="fa fa-file"></i></span>
                                        </a>
                                        <a class="btn btn-outline-warning btn-sm"
                                            href="{{ url('/admin/data/mahasiswa/' . $item->id . '/edit') }}">
                                            <span><i class="fa fa-pen"></i></span>
                                        </a>
                                        <form class="d-inline" action="{{ url('/admin/data/mahasiswa/' . $item->id) }}"
                                            method="post"
                                            onsubmit="return confirm('Are you sure you want to delete this item?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm d-inline">
                                                <span><i class="fa fa-trash"></i></span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $data->links() }}
            </div>
        </div>
    </div>
    <!-- content -->
@endsection
