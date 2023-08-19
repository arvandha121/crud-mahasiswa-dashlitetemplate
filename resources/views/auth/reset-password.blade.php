@extends('auth.app-auth')

@section('content-auth')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="wrapper">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="logo">
                <img src="https://akupintar.id/documents/20143/0/LOGO+POLITEKNIK+NEGERI+MALANG.png/949b5c7d-1fd2-121d-c1ad-f275911cb955?version=1.0&t=1519104037264&imageThumbnail=1"
                    alt="">
            </div>
            <div class="text-center mt-4 name">
                Forgot Password
            </div>
            <form class="p-3 mt-3" method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" id="token" value="{{ request()->token }}">
                <input type="hidden" name="email" id="email" value="{{ request()->email }}">
                <div class="form-field d-flex align-items-center">
                    <input type="password" name="password" id="password" placeholder="Input your password">
                </div>
                <div class="form-field d-flex align-items-center">
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm Password">
                </div>
                <button class="btn mt-3" type="submit">Update Password</button>
            </form>
        </div>
    </div>
@endsection
