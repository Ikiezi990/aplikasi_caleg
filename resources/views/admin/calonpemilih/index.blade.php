@extends('layouts.appAdmin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->

                    <div class="btn-group mb-2">
                        <a href="{{ route('calonpemilih.index') }}" class="btn btn-success">Refresh</a>
            
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
