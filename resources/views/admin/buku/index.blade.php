@extends('layouts.master')
@section('content')
    @include('admin.buku.form')
    <h3 class="mb-5">Daftar Buku</h3>
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#modalAdd">+
                    Tambah Buku</button>
            </div>
            <div class="card-body">
                <table class="table table-dataTable table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penerbit</th>
                            <th>Pengarang</th>
                            <th>Tahun terbit</th>
                            <th>ISBN</th>
                            <th>Total buku baik</th>
                            <th>Total buku rusak</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bukus as $buku)
                            <tr>
                                <td>{{ $buku->judul_buku }}</td>
                                <td>{{ $buku->kategori->name }}</td>
                                <td>{{ $buku->penerbit->name }}</td>
                                <td>{{ $buku->pengarang }}</td>
                                <td>{{ $buku->tahun_terbit }}</td>
                                <td>{{ $buku->isbn }}</td>
                                <td>{{ $buku->j_buku_baik }}</td>
                                <td>{{ $buku->j_buku_rusak }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdate{{ $buku->id }}">
                                        Edit</button>
                                    <button type="button" class="btn btn-danger shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $buku->id }}">
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
