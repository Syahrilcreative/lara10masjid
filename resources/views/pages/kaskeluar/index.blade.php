@extends('layouts.backend.app')
@section('content')
    @php
        // dd($result->total_kas_masuk);
    @endphp
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <h5 class="text-center">Informasi Saldo Kas</h5>
                    <div class="row">
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3>Rp. {{ number_format($result->total_kas_masuk, 0, ',', '.') }}</h3>
                                    <p>Total Uang Masuk</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>Rp. {{ number_format($result->total_kas_keluar, 0, ',', '.') }}</h3>
                                    <p>Total Uang Keluar</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-4">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>Rp. {{ number_format($result->total_kas_tersisa, 0, ',', '.') }}</h3>
                                    <p>Total Uang Tersisa</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Kas Keluar</h3>
                                <h3 class="card-title"><a href="{{ route('kaskeluar.create') }}"
                                        class="btn btn-sm btn-primary">Create</a></h3>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Keterangan</th>
                                        <th>Uang Masuk</th>
                                        <th>Petugas</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($datas as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->keterangan }}</td>
                                            <td>Rp. {{ number_format($data->uangKeluar) }}</td>
                                            <td>{{ $data->name_created }}</td>
                                            <td><a href="{{ route('kaskeluar.edit', $data->id) }}"
                                                    class="btn btn-sm btn-success">Edit</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
