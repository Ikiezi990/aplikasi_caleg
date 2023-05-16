@extends('layouts.appAdmin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->

                    <div class="btn-group mb-2">
                        <a href="{{ route('kelurahan.index') }}" class="btn btn-success">Refresh</a>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;Tambah
                        </button>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title fs-5" id="exampleModalLabel">Isi Data Kelurahan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('kelurahan.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="nama_kelurahan" class="form-label">Nama kelurahan</label>
                                                    <input type="text" class="form-control" name="nama_kelurahan">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                            style="font-size: 16px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama kelurahan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kelurahan as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->nama_kelurahan }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal{{ $row->id }}">
                                                    Update
                                                </button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal{{ $row->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title fs-5" id="exampleModalLabel">Isi
                                                                    Isi Data kelurahan</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('kelurahan.update', $row->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="nama_kelurahan"
                                                                                    class="form-label">Nama kelurahan</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="nama_kelurahan"
                                                                                    value="{{ $row->nama_kelurahan }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-warning">Update</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <form action="{{ route('kelurahan.destroy', $row->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
