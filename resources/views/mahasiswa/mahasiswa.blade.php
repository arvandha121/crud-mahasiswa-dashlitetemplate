<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>

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

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
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
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-5 mt-3">
                                    <form action="{{ route('mahasiswa.index') }}">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="search..."
                                                name="search" value="{{ request('search') }}">
                                            <button class="btn btn-success" type="submit">
                                                <span><i class="fa fa-search"></i></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="d-flex justify-content-end col-md-7 text-md-end mb-3 ">
                                    <a href="/admin/data/mahasiswa/create" class="btn btn-primary mt-3 mb-4 ml-2">
                                        + Tambah Data
                                    </a>
                                    <a href="/cetak_pdf" class="btn btn-danger mt-3 mb-4 ml-2"
                                        style="margin-left: 5px"><span><i class="fa fa-print"></i></span></a>
                                    <a href="" class="btn btn-success disabled mt-3 mb-4 ml-2"
                                        style="margin-left: 5px"><span><i class="fa fa-file"></i></span></a>
                                </div>
                            </div>
                            <div class="table">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">NO</th> --}}
                                            <th scope="col">ID</th>
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
                                            <tr>
                                                {{-- <td>{{ $loop->iteration }}</td> --}}
                                                <td>{{ $item->id }}</td>
                                                <td>{{ $item->nim }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->tanggal_lahir }}</td>
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
                                                    <form class="d-inline"
                                                        action="{{ url('/admin/data/mahasiswa/' . $item->id) }}"
                                                        method="post"
                                                        onsubmit="return confirm('Are you sure you want to delete this item?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-sm d-inline">
                                                            <span><i class="fa fa-trash"></i></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
                <!-- content -->
            </div>
        </div>

        <!-- JavaScript -->
        <script src="{{ asset('/js/bundle.js?ver=3.2.0') }}"></script>
        <script src="{{ asset('/js/scripts.js?ver=3.2.0') }}"></script>
    </div>
</body>

</html>
