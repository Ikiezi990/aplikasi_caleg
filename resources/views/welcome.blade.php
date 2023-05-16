@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h6>Selamat Datang Di SIMLEG</h6>
            <a href="{{ url('/register') }}" class="btn btn-success">Bergabung Sekarang</a>
            <a href="{{ url('/login') }}" class="btn btn-primary">Login</a>
        </div>
    </div>
</div>

@endsection