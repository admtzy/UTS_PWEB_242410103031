@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="text-center mb-4">
        <h4 class="fw-bold text-success">Halo, Selamat Datang Petani {{ $username }}</h4>
        <p class="text-muted">Kelola hasil panen Anda dengan cermat menggunakan sistem <b>PanenKu</b> 🌾</p>
    </div>

    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab">Kebun</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active">
            <div class="row g-3">
                @foreach($tanaman as $t)
                    <div class="col-md-4">
                        <div class="card hover-scale shadow-sm border-0 p-3 h-100">
                            <h5 class="fw-bold text-success">{{ $t['nama'] }}</h5>
                            <p class="mb-1"><b>Kategori:</b> {{ $t['kategori'] }}</p>
                            <p class="mb-1"><b>Frekuensi Panen:</b> {{ $t['frekuensi'] }}x</p>
                            <p class="mb-1"><b>Pendapatan:</b> {{ $t['pendapatan'] }}%</p>
                            <div class="progress mt-2" style="height: 6px;">
                                <div class="progress-bar bg-success progress-bar-animate" 
                                     role="progressbar"
                                     data-value="{{ $t['pendapatan'] }}"
                                     aria-valuenow="{{ $t['pendapatan'] }}" 
                                     aria-valuemin="0" 
                                     aria-valuemax="100">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
