@extends('admin/admin')

@section('content')
    <!-- content -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ route('mahasiswa.update', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nim" class="form-label">Nim</label>
                        <input type="text" class="form-control" id="nim" name="nim" value="{{ $data->nim }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama"
                            value="{{ $data->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                            value="{{ $data->tanggal_lahir }}">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki"
                                value="Laki-laki" @if ($data->jenis_kelamin === 'Laki-laki') checked @endif>
                            <label class="form-check-label" for="laki-laki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan"
                                value="Perempuan" @if ($data->jenis_kelamin === 'Perempuan') checked @endif>
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea class="form-control" placeholder="Alamat Rumah Mahasiswa" name="alamat">{{ $data->alamat }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-control" id="kota" name="kota"
                            value="{{ $data->kota }}">
                        <div class="mt-4 mb-4">
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- content -->
@endsection
