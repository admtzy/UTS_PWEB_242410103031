@extends('layouts.app')

@section('content')
<div class="profile-card">
    <img src="{{ asset('uplod/r.jpg') }}" 
         alt="Foto {{ $profile['nama'] }}">

    <h4>{{ $profile['nama'] }}</h4>

    <ul class="list-group">
        <li class="list-group-item"><b>Nama:</b> {{ $profile['nama'] }}</li>
        <li class="list-group-item"><b>Usia:</b> {{ $profile['usia'] }} tahun</li>
        <li class="list-group-item"><b>Lokasi:</b> {{ $profile['lokasi'] }}</li>
        <li class="list-group-item"><b>Luas Lahan:</b> {{ $profile['lahan'] }}</li>
        <li class="list-group-item"><b>Komoditas:</b> {{ $profile['komoditas'] }}</li>
    </ul>

    <a href="{{ route('dashboard') }}" class="btn btn-success">Kembali ke Dashboard</a>
</div>
@endsection
