@extends('layouts.master')

@section('content')
    <div class="row">
        @if (session('status'))
            <div class="alert alert-{{ session('status') }}" role="alert">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            <div class="col-8">
                <form action="{{ Route('admin.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Profile</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped table bordered">
                                <tr>
                                    <th>Foto</th>
                                    <td>
                                        <input type="file" class="form-control" name="foto" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>
                                        <input class="form-control" type="text" name="fullname"
                                            value="{{ Auth::user()->fullname }}">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Username</th>
                                    <td>
                                        <input class="form-control" type="text" name="username"
                                            value="{{ Auth::user()->username }}">
                                    </td>
                                </tr>

                                <tr>
                                    <th>Alamat</th>
                                    <td>
                                        <textarea name="alamat" class="form-control">{{ Auth::user()->alamat }}</textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>
                                        <input class="form-control" type="password" name="password"
                                            placeholder="Sandi belum dirubah" autocomplete="" required>
                                    </td>
                                </tr>

                            </table>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- @foreach ($profiles as $profile) --}}
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4>Profile Saya</h4>
                        </div>
                        <div class="card-body">
                            <img class="w-50" src="{{ $profile->foto }}" alt="">
                            <div class="row">
                                <div class="col-4">Nama Lengkap</div>
                                <div class="col-8">:{{ $profile->fullname }}</div>
                                <div class="col-4">Username</div>
                                <div class="col-8">:{{ $profile->username }}</div>
                                <div class="col-4">Alamat</div>
                                <div class="col-8">:{{ $profile->alamat }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    @endsection
