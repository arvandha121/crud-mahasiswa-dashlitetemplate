@extends('admin/admin')

@section('content')
    <!-- content -->
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                @if (Session::has('success'))
                    <div class="alert alert-success mt-3">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-5 mt-3 mb-3">
                        <form action="{{ route('administration.index') }}" method="GET" class="form-inline">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search..." name="search"
                                    value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-success" type="submit" title="Search">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex justify-content-end col-md-7 text-md-end mb-3 ">
                        <a href="{{ route('administration.create') }}" class="btn btn-primary mt-3 ml-2"
                            title="Create Data Mahasiswa">
                            + Tambah Data
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <!-- Table header columns -->
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows with filtered data -->
                            @foreach ($data as $user)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            @if ($user->nama !== 'admin')
                                                <a class="btn btn-outline-warning btn-sm" style="margin-right: 10px"
                                                    href="{{ route('administration.edit', $user->id) }}" title="edit">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                <form action="{{ route('administration.destroy', $user->id) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this user?')"
                                                    title="delete">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
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
