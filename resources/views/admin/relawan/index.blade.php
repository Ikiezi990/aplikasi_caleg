@extends('layouts.appAdmin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Button trigger modal -->

                    <div class="btn-group mb-2">
                        <a href="{{ route('relawan.index') }}" class="btn btn-success">Refresh</a>
                    </div>

                    <!-- Modal -->
                    <div class="table-responsive">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                            style="font-size: 16px">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Total Rekrutan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($relawan as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td> <div class="badge bg-success text-white">{{ \App\Models\CalonPemilih::where('user_id', $row->id)->count() }}</div> </td>
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
