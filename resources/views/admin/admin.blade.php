<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN | MAHASISWA</title>

    <link id="skin-default" rel="stylesheet" href="{{ asset('/css/dashlite.css?ver=3.2.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('/css/theme.css?ver=3.2.0') }}">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('/img/polinema.png') }}">

    {{-- Awesome icons --}}
    <link rel="stylesheet" href="/path/to/cdn/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">

    {{-- css bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    {{-- js bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
                            <img class="logo-light logo-img" src="{{ asset('/img/polinema.png') }}" alt="logo">
                            <img class="logo-light logo-img" src="{{ asset('/img/polinema.png') }}" alt="logo">
                        </a>
                        <a href="/admin/dashboard" class="logo-link nk-sidebar-logo me-2">
                            <h5 class="mb-0" style="color: white;"><b>POLINEMA</b></h5>
                        </a>
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
                                    <a href="/admin/administration" class="nk-menu-link d-flex align-items-center"
                                        style="margin-left: -25px">
                                        <span class="nk-menu-icon"><i class="fa fa-key mr-2"></i></span>
                                        <span class="nk-menu-text">Administration</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ route('debug.index') }}" class="nk-menu-link d-flex align-items-center"
                                        style="margin-left: -25px;">
                                        <span class="nk-menu-icon"><i class="fas fa-wrench mr-2"></i></span>
                                        <span class="nk-menu-text">Settings</span>
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
                            <div class="container-fluid">
                                <div class="container">
                                    <b>
                                        <span id="currentDateTime"></span>
                                    </b>
                                </div>
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
                                                    @auth
                                                        <li class="user-name">Hello,
                                                            <span class="text-primary">{{ auth()->user()->nama }}</span>
                                                        </li>
                                                        <li class="divider"></li>
                                                    @endauth
                                                    <li>
                                                        <a href="#" id="logoutBtn">
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
                {{-- content --}}
                @yield('content')
                {{-- content --}}
            </div>
        </div>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Logout
                        Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmLogoutBtn">Logout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('/js/bundle.js?ver=3.2.0') }}"></script>
    <script src="{{ asset('/js/scripts.js?ver=3.2.0') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="{{ asset('/js/showAll.js') }}"></script>
    <script src="{{ asset('/js/timeScript.js') }}"></script>
    <script src="{{ asset('/js/filterData.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    @if (isset($labelsGender) && isset($datasetGender))
        <script>
            var ctx = document.getElementById('studentsGender').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: @json($labelsGender),
                    datasets: [{
                        label: 'Jumlah',
                        data: @json($datasetGender),
                        backgroundColor: [
                            'rgb(54, 162, 235)',
                            'rgb(255, 99, 132)'
                        ],
                        borderColor: 'rgba(255, 255, 255, 255)',
                        borderWidth: 4
                    }]
                },
            });
        </script>
    @endif

    @if (isset($labelsCity) && isset($datasetCity))
        <script>
            var ctx = document.getElementById('studentsCity').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: @json($labelsCity),
                    datasets: [{
                        label: 'Jumlah',
                        data: @json($datasetCity),
                        backgroundColor: generateBackgroundColors(@json($datasetCity)),
                        borderColor: '#ffffff',
                        borderWidth: 1
                    }]
                },
            });

            function generateBackgroundColors(data) {
                var backgroundColors = [];
                for (var i = 0; i < data.length; i++) {
                    backgroundColors.push(getRandomColor());
                }
                return backgroundColors;
            }

            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
        </script>
    @endif

    @if (isset($labelsTahun) && isset($datasetTahun))
        <script>
            var ctx = document.getElementById('birthYearChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: @json($labelsTahun),
                    datasets: [{
                        label: 'Jumlah',
                        data: @json($datasetTahun),
                        backgroundColor: generateBackgroundColors(@json($datasetTahun)),
                        borderColor: '#ffffff',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        legend: {
                            labels: {
                                color: 'rgba(0, 0, 0, 0)' // Transparent color for labels
                            }
                        }
                    }
                }
            });

            function generateBackgroundColors(data) {
                var backgroundColors = [];
                for (var i = 0; i < data.length; i++) {
                    backgroundColors.push(getRandomColor());
                }
                return backgroundColors;
            }

            function getRandomColor() {
                var letters = '0123456789ABCDEF';
                var color = '#';
                for (var i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            }
        </script>
    @endif
    <script>
        // Menambahkan event listener saat dokumen selesai dimuat
        document.addEventListener('DOMContentLoaded', function() {
            // Menampilkan modal saat tombol logout ditekan
            var logoutBtn = document.getElementById('logoutBtn');
            var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));

            logoutBtn.addEventListener('click', function(event) {
                event.preventDefault(); // Mencegah tindakan default link
                logoutModal.show();
            });

            // Menambahkan event listener pada tombol "Logout" dalam modal
            var confirmLogoutBtn = document.getElementById('confirmLogoutBtn');
            confirmLogoutBtn.addEventListener('click', function() {
                window.location.href = "{{ url('/logout') }}";
            });
        });
    </script>
</body>

</html>
