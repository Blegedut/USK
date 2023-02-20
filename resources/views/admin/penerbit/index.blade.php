@extends('layouts.master')
@section('content')
    @include('admin.penerbit.form')
    <h3 class="mb-5">Daftar Penerbit</h3>
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#modalAdd">+
                    Tambah Data Penerbit</button>
            </div>
            <div class="card-body">
                <table class="table table-dataTable table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penerbits as $key => $penerbit)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $penerbit->kode }}</td>
                                <td>{{ $penerbit->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdate{{ $penerbit->id }}">
                                        Edit</button>
                                    <button type="button" class="btn btn-danger shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $penerbit->id }}">
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
