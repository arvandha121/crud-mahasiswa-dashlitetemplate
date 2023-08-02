@extends('app')

@section('content')
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-5 mt-3 mb-3">
                        <form action="{{ route('kota.index') }}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="search..." name="kota"
                                    value="{{ request('kota') }}">
                                <button class="btn btn-success" type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">KOTA</th>
                                <th scope="col">JUMLAH</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->kota }}</td>
                                    <td>{{ $item->total_count }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- content -->
@endsection
