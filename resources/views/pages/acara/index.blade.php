@extends('layouts.backend.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="container-fluid mt-2">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Dokumentasi Acara</h3>
                                <h3 class="card-title"><a href="{{ route('acara.create') }}"
                                        class="btn btn-sm btn-primary">Create</a></h3>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>User Created</th>
                                        <th>Status</th>
                                        <th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($acaras as $acara)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td><img src="{{ asset('storage/acara/' . $acara->image) }}" alt=""
                                                    height="100px">
                                            </td>
                                            <td>{{ $acara->title }}</td>
                                            <td>{!! \Str::limit($acara->body, 50, ' ...') !!}
                                            </td>
                                            <td>{{ $acara->user_name }}</td>
                                            <td @class([
                                                'bg-success' => $acara->status == 'active',
                                                'bg-danger' => $acara->status != 'active',
                                            ])>
                                                {{ $acara->status }}
                                            </td>
                                            <td><a href="{{ route('acara.edit', $acara->id) }}"
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
