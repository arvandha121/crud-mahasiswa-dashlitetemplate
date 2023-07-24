<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create form</title>
    <link id="skin-default" rel="stylesheet" href="{{ asset('/css/dashlite.css?ver=3.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/css/theme.css?ver=3.2.0') }}">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('/images') }}">

    {{-- Awesome icons --}}
    <link rel="stylesheet" href="/path/to/cdn/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    {{-- css bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    {{-- js bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar">
    <div class="nk-app-root">
        <!-- main -->
        <div class="nk-main ">
            <aside class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger d-flex align-items-center">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                            <i class="fa fa-bars ml-5 mr-2"></i>
                        </a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                            data-target="sidebarMenu">
                            <i class="fa fa-bars ml-5 mr-2"></i>
                        </a>
                    </div>
                    <div class="nk-sidebar-brand d-flex align-items-center justify-content-center">
                        <a href="/admin/dashboard" class="logo-link nk-sidebar-logo me-2">
                            <img class="logo-light logo-img"
                                src="https://akupintar.id/documents/20143/0/LOGO+POLITEKNIK+NEGERI+MALANG.png/949b5c7d-1fd2-121d-c1ad-f275911cb955?version=1.0&t=1519104037264&imageThumbnail=1"
                                srcset="./images/logo2x.png 2x" alt="logo">
                            <img class="logo-light logo-img"
                                src="https://akupintar.id/documents/20143/0/LOGO+POLITEKNIK+NEGERI+MALANG.png/949b5c7d-1fd2-121d-c1ad-f275911cb955?version=1.0&t=1519104037264&imageThumbnail=1"
                                srcset="./images/logo2x.png 2x" alt="logo">
                        </a>
                        <h5 class="mb-0" style="color: white;"><b>POLINEMA</b></h5>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="/admin/dashboard" class="nk-menu-link d-flex align-items-center"
                                        style="margin-left: -25px">
                                        <span class="nk-menu-icon"><i class="fa fa-home mr-2"></i></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle d-flex align-items-center"
                                        style="margin-left: -23px">
                                        <span class="nk-menu-icon">
                                            <i class="fa fa-database mr-2"></i>
                                        </span>
                                        <span class="nk-menu-text">Data</span>
                                        <span class="toggle-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="/admin/data/mahasiswa" class="nk-menu-link"
                                                style="margin-left: -30px">
                                                <span class="nk-menu-text">Mahasiswa</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/admin/data/kota" class="nk-menu-link" style="margin-left: -30px">
                                                <span class="nk-menu-text">Kota</span>
                                            </a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="html/crm/customer-list.html" class="nk-menu-link d-flex align-items-center"
                                        style="margin-left: -25px">
                                        <span class="nk-menu-icon"><i class="fa fa-key mr-2"></i></span>
                                        <span class="nk-menu-text">Administration</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </aside>
            <!-- sidebar -->

            <!-- wrap  -->
            <div class="nk-wrap ">
                <!-- main header -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu">
                                    <i class="fa fa-bars mr-2"></i>
                                </a>
                            </div>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <i class="fa fa-user"></i>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="#">
                                                            <span>
                                                                <i class="fa fa-sign-out-alt"
                                                                    style="padding: 10px"></i>
                                                            </span>
                                                            <span>Signout</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header -->
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
                                    <input type="text" class="form-control" id="nim" name="nim"
                                        value="{{ $data->nim }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama"
                                        value="{{ $data->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="text" class="form-control" id="tanggal_lahir"
                                        name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                                </div>
                                <div class="mb-3">
                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="laki-laki" value="Laki-laki"
                                            @if ($data->jenis_kelamin === 'Laki-laki') checked @endif>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="perempuan" value="Perempuan"
                                            @if ($data->jenis_kelamin === 'Perempuan') checked @endif>
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
            </div>
        </div>

        <!-- JavaScript -->
        <script src="{{ asset('/js/bundle.js?ver=3.2.0') }}"></script>
        <script src="{{ asset('/js/scripts.js?ver=3.2.0') }}"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function() {
                $("#tanggal_lahir").datepicker({
                    dateFormat: "yy-mm-dd", // Format tanggal yang ditampilkan
                    changeMonth: true,
                    changeYear: true
                });
            });
        </script>
        <script>
            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
        </script>
    </div>
</body>

</html>
