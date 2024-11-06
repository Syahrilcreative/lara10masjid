@extends('layouts.backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('pengurus.update', $user->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Pengurus - Edit</h3>
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
                                            @if ($user->status == 'active') @selected(true) @endif>active
                                        </option>
                                        <option value="inactive"
                                            @if ($user->status == 'inactive') @selected(true) @endif>inactive
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="name" name="name" readonly value="{{ $user->name }}" required
                                        class="form-control" id="name">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" name="email" readonly value="{{ $user->email }}" required
                                        class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="active"
                                            @if ($user->role == 'user') @selected(true) @endif>User
                                        </option>
                                        <option value="admin"
                                            @if ($user->role == 'admin') @selected(true) @endif>Admin
                                        </option>
                                        <option value="SuperAdmin"
                                            @if ($user->role == 'SuperAdmin') @selected(true) @endif>SuperAdmin
                                        </option>
                                    </select>
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
