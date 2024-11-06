@extends('layouts.backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('kasmasuk.store') }}" method="post">
                                @csrf
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Kas Masuk - Tambah</h3>
                                        <h3 class="card-title"><button type="submit"
                                                class="btn btn-sm btn-primary">Simpan</button></h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="keterangan" name="keterangan" required class="form-control"
                                        id="keterangan">
                                </div>
                                <div class="form-group">
                                    <label for="uangMasuk">Uang Masuk</label>
                                    <input type="uangMasuk" name="uangMasuk" required class="form-control" id="uangMasuk">
                                </div>
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" required class="form-control" id="tanggal">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
