@extends('layouts.master')
@section('content')
    @include('admin.anggota.formAdmin')
    <h3>Profile Statistics</h3>
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#modalAddAdmin">+
                    Tambah Admin</button>
            </div>
            <div class="card-body">
                <table class="table table-dataTable table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Alamat</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($admins); --}}
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $admin->kode }}</td>
                                <td>{{ $admin->fullname }}</td>
                                <td>{{ $admin->username }}</td>
                                <td>{{ $admin->alamat }}</td>
                                <td>{{ $admin->role }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdateAdmin{{ $admin->id }}">
                                        Edit</button>
                                    <button type="button" class="btn btn-danger shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalDeleteAdmin{{ $admin->id }}">
                                        Hapus</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
