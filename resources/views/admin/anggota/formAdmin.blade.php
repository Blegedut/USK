{{-- MODAL ADD --}}
<div class="modal fade modal-borderless" id="modalAddAdmin" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-lg modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Admin baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data"
                    class="form form-horizontal">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label>Fullname</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
                        </div>
                        <div class="col-md-4">
                            <label>Username</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username" required>
                        </div>
                        <div class="col-md-4">
                            <label>Password</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                        <div class="col-md-4">
                            <label>Alamat</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                        </div>
                        <div class="col-md-4">
                            <label>Tanggal</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <input type="date" class="form-control" name="join_date" placeholder="Tanggal masuk"
                                required>
                        </div>
                        <div class="col-md-4">
                            <label>Role</label>
                        </div>
                        <div class="col-md-8 mb-3 form-group">
                            <select name="role" id="" class="form-select" aria-readonly="true">
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <input type="hidden" value="Verified" name="verif">
                        <input type="hidden" value="213123" name="kode">
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
@foreach ($admins as $admin)
    <div class="modal fade modal-borderless" id="modalUpdateAdmin{{ $admin->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/admin/update/' . $admin->id) }}" method="POST" enctype="multipart/form-data"
                        class="form form-horizontal">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-4">
                                <label>NIS</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="text" class="form-control" name="nis" placeholder="NIS"
                                    value="{{ $admin->nis }}">
                            </div>
                            <div class="col-md-4">
                                <label>Fullname</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="text" class="form-control" name="fullname" placeholder="Fullname"
                                    value="{{ $admin->fullname }}" required>
                            </div>
                            <div class="col-md-4">
                                <label>Username</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username"
                                    value="{{ $admin->username }}" required>
                            </div>
                            <div class="col-md-4">
                                <label>Password</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password"
                                    required>
                            </div>
                            <div class="col-md-4">
                                <label>Kelas</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="number" class="form-control" name="kelas" placeholder="Kelas"
                                    value="{{ $admin->kelas }}" required>
                            </div>
                            <div class="col-md-4">
                                <label>Alamat</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                                    value="{{ $admin->alamat }}" required>
                            </div>
                            <div class="col-md-4">
                                <label>Role</label>
                            </div>
                            <div class="col-md-8 mb-3 form-group">
                                <select name="role" class="form-select" id="" aria-readonly="true">
                                    <option value="admin" selected>Admin</option>
                                </select>
                            </div>
                            <input type="hidden" value="Verified" name="verif">
                            <input type="hidden" value="213123" name="kode">
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
@foreach ($admins as $admin)
    <div class="modal fade modal-borderless" id="modalDeleteAdmin{{ $admin->id }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-lg modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah buku baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center">Apakah anda yakin ingin menghapus {{ $admin->username }}?</h5>
                </div>
                <div class="modal-footer">
                    <form action={{ url('/admin/delete/' . $admin->id) }} method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Yes, Delete it</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach