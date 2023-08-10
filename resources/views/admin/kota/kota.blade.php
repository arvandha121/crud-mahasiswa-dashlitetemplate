@extends('admin/admin')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-5 mt-3 mb-3">
                        <form action="{{ route('kota.index') }}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="search..." name="kota"
                                    value="{{ request('kota') }}">
                                <button class="btn btn-success" type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end col-md-7 text-md-end mb-3 ">
                        <a href="/pdf" class="btn btn-danger mt-3 ml-2" style="margin-left: 5px" title="Download PDF"
                            onclick="return confirm('Apakah Anda yakin ingin mengunduh file PDF?')">
                            <span>
                                <i class="fa fa-file-pdf"></i>
                            </span>
                        </a>
                        <a href="/excel" class="btn btn-success mt-3 ml-2" style="margin-left: 5px" title="Download Excel"
                            onclick="return confirm('Apakah Anda yakin ingin mengunduh file Excel?')">
                            <span>
                                <i class="fa fa-file-excel"></i>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">KOTA</th>
                                <th scope="col">JUMLAH</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->kota }}</td>
                                    <td>{{ $item->total_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
@endsection
