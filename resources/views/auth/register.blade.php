@extends('auth.app-auth')

@section('content-auth')
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="wrapper">
            <div class="logo">
                <img src="https://akupintar.id/documents/20143/0/LOGO+POLITEKNIK+NEGERI+MALANG.png/949b5c7d-1fd2-121d-c1ad-f275911cb955?version=1.0&t=1519104037264&imageThumbnail=1"
                    alt="">
            </div>
            <div class="text-center mt-4 name">
                Register for Admin Polinema
            </div>
            <form class="p-3 mt-3" method="POST" action="{{ route('register') }}">
                @csrf
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="nama" id="nama" placeholder="Nama" value="{{ old('nama') }}">
                </div>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-field d-flex align-items-center">
                    <input type="email" name="email" id="email" placeholder="E-Mail Address"
                        value="{{ old('email') }}">
                </div>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-field d-flex align-items-center">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                @error('password_confirmation')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-field d-flex align-items-center">
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Confirm Password">
                </div>
                <button class="btn btn-primary mt-3 btn-block">Register</button>
            </form>
            <div class="text-center fs-6 mt-3">
                Already have an account? <a href="/login">Sign in</a>
            </div>
        </div>
    </div>
    <script>
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('password_confirmation');
        const registerButton = document.getElementById('registerButton');

        confirmPasswordInput.addEventListener('input', () => {
            if (passwordInput.value === confirmPasswordInput.value) {
                confirmPasswordInput.setCustomValidity('');
                registerButton.removeAttribute('disabled');
            } else {
                confirmPasswordInput.setCustomValidity('Passwords must match');
                registerButton.setAttribute('disabled', 'disabled');
            }
        });
    </script>
@endsection
