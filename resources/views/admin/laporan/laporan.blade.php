@extends('layouts.master')
@section('content')
    <h3>Cetak Laporan</h3>
    <div class="card">
        <div class="card-header">
            Select Laporan
        </div>
        <div class="card-body">
            <div class="card">
                <form action="{{ Route('admin.cetak.laporan') }}" target="_blank">
                    <div class="row">
                        <div class="col-md-4">
                            Masukan Tanggal
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="date" name="tanggal_peminjaman" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </div>
@endsection
