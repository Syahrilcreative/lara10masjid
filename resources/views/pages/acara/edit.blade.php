@extends('layouts.backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('acara.update', $acara->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Dokumentasi Acara - Tambah</h3>
                                    <h3 class="card-title"><button type="submit"
                                            class="btn btn-sm btn-primary">Simpan</button></h3>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="active"
                                            @if ($acara->status == 'active') @selected(true) @endif>active
                                        </option>
                                        <option value="inactive"
                                            @if ($acara->status == 'inactive') @selected(true) @endif>inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label><br>
                                    <img src="{{ asset('storage/acara/' . $acara->image) }}" alt="" height="200px;">
                                </div>
                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="title" name="title" readonly value="{{ $acara->title }}" required
                                        class="form-control" id="title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Isi</label>
                                    <textarea name="body" height="500px" required id="summernote"> {{ $acara->body }} @disabled(true)
                                        </textarea>
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
