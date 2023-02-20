{{-- MODAL ADD --}}
<div class="modal fade modal-borderless" id="modalAdd" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah buku baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data"
                    class="form form-horizontal">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Judul Buku</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="text" class="form-control" name="judul_buku" placeholder="Judul Buku"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label>Kategori Buku</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            {{-- @dd($kategoris) --}}
                            <select class="form-select" name="kategori_id" id="">
                                <option value="" selected disabled>-- Pilih Kategori --</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Penerbit Buku</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <select class="form-select" name="penerbit_id" id="">
                                <option value="" selected disabled>-- Pilih Penerbit --</option>
                                @foreach ($penerbits as $penerbit)
                                    <option value="{{ $penerbit->id }}">{{ $penerbit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Pengarang</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="text" class="form-control" name="pengarang" placeholder="Pengarang"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label>Tahun terbit</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="number" class="form-control" name="tahun_terbit" placeholder="Tahun Terbit"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label>ISBN</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="number" class="form-control" name="isbn" placeholder="ISBN" required>
                        </div>
                        <div class="col-md-4">
                            <label>Buku Baik</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="number" class="form-control" name="j_buku_baik" placeholder="Buku Baik"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label>Buku Rusak</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="number" class="form-control" name="j_buku_rusak" placeholder="Buku Rusak"
                                required>
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
@foreach ($bukus as $buku)
    <div class="modal fade modal-borderless" id="modalUpdate{{ $buku->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah buku baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/buku/update/' . $buku->id) }}" method="POST" enctype="multipart/form-data"
                        class="form form-horizontal">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-4">
                                <label>Judul Buku</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="text" class="form-control" value="{{ $buku->judul_buku }}"
                                    name="judul_buku" placeholder="Judul Buku" required>
                            </div>
                            <div class="col-md-4">
                                <label>Kategori Buku</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                {{-- @dd($kategoris) --}}
                                <select class="form-select" value="{{ $buku->kategori_id }}" name="kategori_id"
                                    id="">
                                    <option value="" selected disabled>-- Pilih Kategori --</option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Penerbit Buku</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <select class="form-select" value="{{ $buku->penerbit_id }}" name="penerbit_id"
                                    id="">
                                    <option value="" selected disabled>-- Pilih Penerbit --</option>
                                    @foreach ($penerbits as $penerbit)
                                        <option value="{{ $penerbit->id }}">{{ $penerbit->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label>Pengarang</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="text" class="form-control" value="{{ $buku->pengarang }}"
                                    name="pengarang" placeholder="Pengarang" required>
                            </div>
                            <div class="col-md-4">
                                <label>Tahun terbit</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="number" class="form-control" value="{{ $buku->tahun_terbit }}"
                                    name="tahun_terbit" placeholder="Tahun Terbit" required>
                            </div>
                            <div class="col-md-4">
                                <label>ISBN</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="number" class="form-control" value="{{ $buku->isbn }}"
                                    name="isbn" placeholder="ISBN" required>
                            </div>
                            <div class="col-md-4">
                                <label>Buku Baik</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="number" class="form-control" value="{{ $buku->j_buku_baik }}"
                                    name="j_buku_baik" placeholder="Buku Baik" required>
                            </div>
                            <div class="col-md-4">
                                <label>Buku Rusak</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="number" class="form-control" value="{{ $buku->j_buku_rusak }}"
                                    name="j_buku_rusak" placeholder="Buku Rusak" required>
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

{{-- MODAL DELETE --}}
@foreach ($bukus as $buku)
    <div class="modal fade modal-borderless" id="modalDelete{{ $buku->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah buku baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Apakah anda yakin ingin menghapus buku {{ $buku->judul_buku }}?</h5>
                </div>
                <div class="modal-footer">
                    <form action={{ url('/admin/buku/delete/' . $buku->id) }} method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
