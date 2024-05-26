@extends('auth.app-auth')

@section('content-auth')
    <div class="container">
        <div class="wrapper">
            @if (session()->has('status'))
                <div class="alert alert-success">
                    {{ session()->get('status') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="logo">
                <img src="https://akupintar.id/documents/20143/0/LOGO+POLITEKNIK+NEGERI+MALANG.png/949b5c7d-1fd2-121d-c1ad-f275911cb955?version=1.0&t=1519104037264&imageThumbnail=1"
                    alt="">
            </div>
            <div class="text-center mt-4 name">
                Forgot Password
            </div>
            <div class="text-center fs-6 mt-3">
                Please enter your email to request a password reset.
            </div>
            <form class="p-3 mt-3" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <input type="email" name="email" id="email" placeholder="Input your email">
                </div>
                <button class="btn mt-3" type="submit">Request Reset</button>
            </form>
            <div class="text-center fs-6 mt-3">
                <a href="{{ route('whatsapp-form') }}" style="color: #25D366">
                    <i class="fab fa-whatsapp"></i> Reset via WhatsApp
                </a>
            </div>
            <div class="text-center fs-6 mt-3">
                <a href="/login">Back to login</a>
            </div>
        </div>
    </div>
@endsection
