@extends('admin/admin')

@section('content')
    <!-- content -->
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="card">
                    <div class="card-header">
                        Edit User
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('administration.update', $user->id) }}" method="POST" id="editForm">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="nama" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama', $user->nama) }}">
                                <div class="text-danger" id="namaAlert"></div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $user->email) }}">
                                <div class="text-danger" id="emailAlert"></div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">New Password:</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <div class="text-danger" id="passwordAlert"></div>
                            </div>
                            <!-- Add other input fields for other attributes -->
                            <a href="{{ route('administration.index') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-success" id="submitButton">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->

    <script src="{{ asset('js/form-validation.js') }}"></script>
@endsection
