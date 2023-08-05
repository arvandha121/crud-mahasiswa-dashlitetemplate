@extends('app')

@section('content')
    <!-- content -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-3 col-sm-3">
                            <a href="data/mahasiswa?show_all=true">
                                <div class="card card-statistic-2">
                                    <div class="card-icon shadow-primary bg-primary">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Students</h4>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                {{ $totalStudents }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3">
                            <a href="data/mahasiswa?search=laki-laki">
                                <div class="card card-statistic-2">
                                    <div class="card-icon shadow-primary bg-primary">
                                        <i class="fas fa-male"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Male</h4>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                {{ $totalMaleStudents }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-sm-3">
                            <a href="data/mahasiswa?search=perempuan">
                                <div class="card card-statistic-2">
                                    <div class="card-icon shadow-primary bg-primary">
                                        <i class="fas fa-female"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Total Female</h4>
                                        </div>
                                        <div class="card-body">
                                            <p>
                                                {{ $totalFemaleStudents }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-lg-6 mt-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>Presentase Mahasiswa Berdasarkan Gender</h4>
                                            <canvas id="studentsGender" style="min-width: 50px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-lg-6 mt-3 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>Presentase Mahasiswa Berdasarkan Asal Kota</h4>
                                            <canvas id="studentsCity" style="min-width: 50px"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-lg-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Jumlah Mahasiswa Berdasarkan Tahun Kelahiran</h4>
                                        <canvas id="birthYearChart" style="min-width: 50px"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
@endsection
