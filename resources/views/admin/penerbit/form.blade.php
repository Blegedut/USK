{{-- MODAL ADD --}}
<div class="modal fade modal-borderless" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penerbit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin/penerbit/store') }}" method="POST" enctype="multipart/form-data"
                    class="form form-horizontal">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nama Penerbit</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="text" class="form-control" name="nama" placeholder="penerbit" required>
                        </div>
                        <div class="col-sm-12 mt-4 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- MODAL ADD --}}

{{-- MODAL UPDATE --}}
@foreach ($penerbits as $penerbit)
    <div class="modal fade modal-borderless" id="modalUpdate{{ $penerbit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penerbit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/penerbit/update/' . $penerbit->id) }}" method="POST" enctype="multipart/form-data"
                        class="form form-horizontal">
                        @csrf
                        @method('PUT')
                        {{-- @method('put') --}}
                        <div class="row">
                            <div class="col-md-4">
                                <label>Nama Penerbit</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="text" class="form-control" name="nama" value="{{ $penerbit->name }}"
                                    placeholder="penerbit" required>
                            </div>
                            <div class="col-sm-12 mt-4 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- MODAL UPDATE --}}
@foreach ($penerbits as $penerbit)
    <div class="modal fade modal-borderless" id="modalDelete{{ $penerbit->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus data penerbit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Apakah anda yakin ingin menghapus penerbit buku {{ $penerbit->name }}?</h5>
                </div>
                <div class="modal-footer">
                    <form action={{ url('/admin/penerbit/delete/' . $penerbit->id) }} method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
{{-- MODAL DELETE --}}
