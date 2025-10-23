@extends('layouts.app')

@section('content')
<div class="text-center mb-4">
    <h4 class="fw-bold text-success">Pengelolaan Panen Petani {{ $username }}</h4>
    <p class="text-muted">Data hasil panen terbaru Anda 🌾</p>
</div>

<div class="row justify-content-center">
    @foreach($panen as $p)
        <div class="col-md-4 mb-4">
            <div class="card hover-scale text-center shadow-sm border-0 p-3">
                <div class="card-body">
                    <h5 class="card-title text-success">{{ $p['nama'] }}</h5>
                    <hr>
                    <p class="mb-1"><b>Tanggal:</b> {{ $p['tanggal'] }}</p>
                    <p class="mb-1"><b>Berat:</b> {{ $p['berat'] }}</p>
                    <p class="mb-0"><b>Lokasi:</b> {{ $p['lokasi'] }}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="text-center mt-5 mb-4">
    <h5 class="fw-bold text-success"> Jumlah Hasil Panen</h5>
</div>

<div class="row justify-content-center">
    <div class="col-md-3 mb-3">
        <div class="card hover-scale text-center shadow-sm border-0 p-3">
            <h6 class="text-success">Total Produksi Padi</h6>
            <p class="fw-semibold mb-0">{{ $ringkasan['padi'] }}</p>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card hover-scale text-center shadow-sm border-0 p-3">
            <h6 class="text-success">Total Produksi Jagung</h6>
            <p class="fw-semibold mb-0">{{ $ringkasan['jagung'] }}</p>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card hover-scale text-center shadow-sm border-0 p-3">
            <h6 class="text-success">Total Pendapatan</h6>
            <p class="fw-semibold mb-0">{{ $ringkasan['total_pendapatan'] }}</p>
        </div>
    </div>

    <div class="col-md-3 mb-3">
        <div class="card hover-scale text-center shadow-sm border-0 p-3">
            <h6 class="text-success">Stok Tersedia</h6>
            <p class="fw-semibold mb-0">{{ $ringkasan['stok'] }} unit</p>
        </div>
    </div>
</div>

<div class="text-center mt-4">
    <a href="{{ route('dashboard') }}" class="btn btn-success">Kembali ke Dashboard</a>
</div>
@endsection
