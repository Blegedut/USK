@extends('layouts.master')
@section('content')
    @include('admin.anggota.form')
    <h3>Profile Statistics</h3>
    <div class="page-content">
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary shadow" data-bs-toggle="modal" data-bs-target="#modalAdd">+
                    Tambah Anggota</button>
            </div>
            <div class="card-body">
                <table class="table table-dataTable table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>NIS</th>
                            <th>Fullname</th>
                            <th>Username</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>Verifikasi</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @dd($anggotas); --}}
                        @foreach ($anggotas as $anggota)
                            <tr>
                                <td>{{ $anggota->kode }}</td>
                                <td>{{ $anggota->nis }}</td>
                                <td>{{ $anggota->fullname }}</td>
                                <td>{{ $anggota->username }}</td>
                                <td>{{ $anggota->kelas }}</td>
                                <td>{{ $anggota->alamat }}</td>
                                <td>{{ $anggota->verif }}</td>
                                <td>{{ $anggota->role }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalUpdate{{ $anggota->id }}">
                                        Edit</button>
                                    <button type="button" class="btn btn-danger shadow" data-bs-toggle="modal"
                                        data-bs-target="#modalDelete{{ $anggota->id }}">
                                        Hapus</button>
                                    @if ($anggota->verif == 'Unverified')
                                        <form action={{ url('/anggota/update/' . $anggota->id) }} method="post">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="verif" value="Verified">
                                            <button type="submit" class="btn btn-success shadow">
                                                Verified</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
