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
            <div class="text-center mt-4 name">
                Reset Password via WhatsApp
            </div>
            <div class="text-center fs-6 mt-3">
                Please enter your phone number to receive a password reset link via WhatsApp.
            </div>
            <form class="p-3 mt-3" method="POST" action="{{ route('send-whatsapp-reset-link') }}">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <input type="tel" name="phone_number" id="phone_number" placeholder="Input your phone number">
                </div>
                <button class="btn mt-3" type="submit">Send Reset Link</button>
            </form>
            <div class="text-center fs-6 mt-3">
                <a href="{{ route('password.request') }}">Back to email reset</a>
            </div>
        </div>
    </div>
@endsection
