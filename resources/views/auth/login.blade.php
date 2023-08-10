<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ asset('/img/polinema.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
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
                Admin Polinema
            </div>
            <form class="p-3 mt-3" method="POST" action="{{ url('/login/check') }}">
                @csrf
                <div class="form-field d-flex align-items-center">
                    <input type="text" name="nama" id="nama" placeholder="nama" value="{{ old('nama') }}">
                </div>
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="form-field d-flex align-items-center">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <input style="margin-left: 4px" type="checkbox" id="showPassword">
                <label style="margin-left: 4px; margin-bottom: 4px" for="showPassword">Lihat Password</label>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                <button class="btn mt-3">Login</button>
            </form>
            <div class="text-center fs-6">
                Don't have accounts? <a href="#">Sign up</a>
            </div>
        </div>
    </div>
    <footer class="footer">© 2023 - Arvandha121</footer>
    <script>
        // Toggle password visibility
        const showPasswordCheckbox = document.getElementById('showPassword');
        const passwordInput = document.getElementById('password');

        showPasswordCheckbox.addEventListener('change', () => {
            const type = showPasswordCheckbox.checked ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
</body>

</html>
