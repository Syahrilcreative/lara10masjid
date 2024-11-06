@extends('layouts.backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('pengurus.store') }}" method="post">
                                @csrf
                                <div class="card-header">
                                    <div class="d-flex justify-content-between">
                                        <h3 class="card-title">Pengurus - Tambah</h3>
                                        <h3 class="card-title"><button type="submit"
                                                class="btn btn-sm btn-primary">Simpan</button></h3>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" name="name" required class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" name="email" required class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" name="password" required class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="active">User
                                        </option>
                                        <option value="admin">Admin
                                        </option>
                                        <option value="SuperAdmin">SuperAdmin
                                        </option>
                                    </select>
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
