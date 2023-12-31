@extends('admin/admin')

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
                        <a href="/admin/data/mahasiswa/create" class="btn btn-primary mt-3 ml-2"
                            title="Create Data Mahasiswa">
                            + Tambah Data
                        </a>
                        <a href="/cetak_pdf" class="btn btn-danger mt-3 ml-2" style="margin-left: 5px" title="Download PDF"
                            onclick="return confirm('Apakah Anda yakin ingin mengunduh file PDF?')">
                            <span>
                                <i class="fa fa-file-pdf"></i>
                            </span>
                        </a>
                        <a href="/cetak_excel" class="btn btn-success mt-3 ml-2" style="margin-left: 5px"
                            title="Download Excel"
                            onclick="return confirm('Apakah Anda yakin ingin mengunduh file Excel?')">
                            <span>
                                <i class="fa fa-file-excel"></i>
                            </span>
                        </a>
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
                        <select name="kota" id="kota" class="form-control" onchange="filterData()">
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
                                <th scope="col">NO</th>
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
                                <?php
                                // Calculate the correct "NO" value based on the current page number and the number of items per page
                                $no = ($data->currentPage() - 1) * $data->perPage() + $loop->index + 1;
                                ?>
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $item->nim }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ date('d-m-Y', strtotime($item->tanggal_lahir)) }}</td>
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
                                        <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#deleteModal{{ $item->id }}">
                                            <span><i class="fa fa-trash"></i></span>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal Konfirmasi Delete -->
                                <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger text-white">
                                                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data ini?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Batal</button>
                                                <button type="button" class="btn btn-danger"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form{{ $item->id }}').submit();">Hapus</button>
                                                <form id="delete-form{{ $item->id }}"
                                                    action="{{ url('/admin/data/mahasiswa/' . $item->id) }}" method="post"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $data->appends(['search' => request('search'), 'sort' => request('sort')])->links() }}
            </div>
        </div>
    </div>
    <!-- content -->
@endsection
