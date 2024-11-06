@extends('layouts.backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('acara.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Dokumentasi Acara - Tambah</h3>
                                    <h3 class="card-title"><button type="submit"
                                            class="btn btn-sm btn-primary">Simpan</button></h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" name="image" required class="form-control" id="image"
                                            accept="image/png, image/jpg, image/jpeg" />
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Judul</label>
                                        <input type="title" name="title" required class="form-control" id="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Isi</label>
                                        <textarea name="body" height="500px" required id="summernote">
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
