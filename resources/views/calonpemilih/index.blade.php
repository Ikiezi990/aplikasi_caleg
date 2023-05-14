@extends('layouts.appRelawan')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->

                    <div class="btn-group mb-2">
                        <a href="{{ route('calonpemilih.index') }}" class="btn btn-success">Refresh</a>
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
                                    <h5 class="modal-title fs-5" id="exampleModalLabel">Isi Lengkap Biodata Pemilih</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('calonpemilih.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nik" class="form-label">Nik</label>
                                                    <input type="number" class="form-control" name="nik">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                                    <input type="text" class="form-control" id="nama_lengkap"
                                                        name="nama_lengkap">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="tempat_lahir"
                                                        name="tempat_lahir">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir" name="tanggal_lahir"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                                        <option value="L">Laki Laki</option>
                                                        <option value="L">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="no_whatsapp" class="form-label">No Whatsapp</label>
                                                    <input type="number" name="no_whatsapp" name="no_whatsappp"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="alamat" class="form-label">Alamat</label>
                                                    <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="provinsi" class="form-label">Provinsi</label>
                                                    <select name="provinsi" id="provinsi" class="form-control">
                                                        <option value="">-- Pilih --</option>
                                                        @foreach ($provinsi as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama_provinsi }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kota" class="form-label">Kabupaten/Kota</label>
                                                    <select name="kota" id="kota" class="form-control">
                                                        <option value="">-- Pilih --</option>
                                                        @foreach ($kota as $item)
                                                            <option value="{{ $item->id }}">{{ $item->nama_kota }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                                    <select name="kecamatan" id="kecamatan" class="form-control">
                                                        <option value="">-- Pilih --</option>
                                                        @foreach ($kecamatan as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->nama_kecamatan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="kelurahan" class="form-label">Kelurahan</label>
                                                    <select name="kelurahan" id="kelurahan" class="form-control">
                                                        <option value="">-- Pilih --</option>
                                                        @foreach ($kelurahan as $item)
                                                            <option value="{{ $item->id }}">
                                                                {{ $item->nama_kelurahan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="scan_ktp" class="form-label">Scan Ktp</label>
                                                    <input type="file" name="scan_ktp" id="scan_ktp"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="foto" class="form-label">Foto</label>
                                                    <input type="file" name="foto" id="foto"
                                                        class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
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
                                    <th>NIK</th>
                                    <th>NAMA</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>TEMPAT, TGL LAHIR</th>
                                    <th>ALAMAT</th>
                                    <th>NO WA</th>
                                    <th>SCAN KTP</th>
                                    <th>FOTO</th>
                                    <th>AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->nik }}</td>
                                        <td>{{ $row->nama_lengkap }}</td>
                                        <td>{{ $row->jenis_kelamin }}</td>
                                        <td>{{ $row->tempat_lahir }}, {{ $row->tanggal_lahir }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->no_wa }}</td>
                                        <td>
                                            <img src="{{ asset('ktppemilih/' . $row->scan_ktp) }}" style="height: 50px;"
                                                alt="" srcset="">
                                        </td>
                                        <td>
                                            <img src="{{ asset('fotorelawan/' . $row->foto) }}" style="height: 50px;"
                                                alt="" srcset="">
                                        </td>
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
                                                                    Lengkap Biodata Pemilih</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('calonpemilih.update', $row->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="nik"
                                                                                    class="form-label">Nik</label>
                                                                                <input type="number" class="form-control"
                                                                                    name="nik"
                                                                                    value="{{ $row->nik }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="nama_lengkap"
                                                                                    class="form-label">Nama Lengkap</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="nama_lengkap" name="nama_lengkap"
                                                                                    value="{{ $row->nama_lengkap }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tempat_lahir"
                                                                                    class="form-label">Tempat Lahir</label>
                                                                                <input type="text" class="form-control"
                                                                                    id="tempat_lahir" name="tempat_lahir"
                                                                                    value="{{ $row->tempat_lahir }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="tanggal_lahir"
                                                                                    class="form-label">Tanggal
                                                                                    Lahir</label>
                                                                                <input type="date" name="tanggal_lahir"
                                                                                    name="tanggal_lahir"
                                                                                    class="form-control"
                                                                                    value="{{ $row->tanggal_lahir }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="jenis_kelamin"
                                                                                    class="form-label">Jenis
                                                                                    Kelamin</label>
                                                                                <select class="form-control"
                                                                                    name="jenis_kelamin"
                                                                                    id="jenis_kelamin">
                                                                                    <option value="L"
                                                                                        @if ($row->jenis_kelamin == 'L') selected @endif>
                                                                                        Laki Laki
                                                                                    </option>
                                                                                    <option value="P"
                                                                                        @if ($row->jenis_kelamin == 'P') selected @endif>
                                                                                        Perempuan
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="no_whatsapp"
                                                                                    class="form-label">No Whatsapp</label>
                                                                                <input type="number" name="no_whatsapp"
                                                                                    name="no_whatsappp"
                                                                                    class="form-control"
                                                                                    value="{{ $row->no_wa }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="alamat"
                                                                                    class="form-label">Alamat</label>
                                                                                <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control">{{ $row->alamat }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="provinsi"
                                                                                    class="form-label">Provinsi</label>
                                                                                <select name="provinsi" id="provinsi"
                                                                                    class="form-control">
                                                                                    <option value="">-- Pilih --
                                                                                    </option>
                                                                                    @foreach ($provinsi as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}"
                                                                                            @if ($row->provinsi_id == $item->id) selected @endif>
                                                                                            {{ $item->nama_provinsi }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="kota"
                                                                                    class="form-label">Kabupaten/Kota</label>
                                                                                <select name="kota" id="kota"
                                                                                    class="form-control">
                                                                                    <option value="">-- Pilih --
                                                                                    </option>
                                                                                    @foreach ($kota as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}"
                                                                                            @if ($row->kabupaten_id == $item->id) selected @endif>
                                                                                            {{ $item->nama_kota }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="kecamatan"
                                                                                    class="form-label">Kecamatan</label>
                                                                                <select name="kecamatan" id="kecamatan"
                                                                                    class="form-control">
                                                                                    <option value="">-- Pilih --
                                                                                    </option>
                                                                                    @foreach ($kecamatan as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}"
                                                                                            @if ($row->kecamatan_id == $item->id) selected @endif>
                                                                                            {{ $item->nama_kecamatan }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="kelurahan"
                                                                                    class="form-label">Kelurahan</label>
                                                                                <select name="kelurahan" id="kelurahan"
                                                                                    class="form-control">
                                                                                    <option value="">-- Pilih --
                                                                                    </option>
                                                                                    @foreach ($kelurahan as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}"
                                                                                            @if ($row->kelurahan_id == $item->id) selected @endif>
                                                                                            {{ $item->nama_kelurahan }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">

                                                                            <strong class="text-danger">* Tidak Usah Di Isi
                                                                                Jika Tidak Ingin di ganti</strong>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="scan_ktp"
                                                                                    class="form-label">Scan Ktp</label>
                                                                                <input type="file" name="scan_ktp"
                                                                                    id="scan_ktp" class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="foto"
                                                                                    class="form-label">Foto</label>
                                                                                <input type="file" name="foto"
                                                                                    id="foto" class="form-control">
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
                                                <form action="{{ route('calonpemilih.destroy', $row->id) }}"
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
