@extends('welcome')

@section('content')
<div class="container mt-5">
    <h1>Patient Detail</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nama: {{ $pasien->nama }}</h5>
            <p class="card-text">NIK: {{ $pasien->NIK }}</p>
            <p class="card-text">Usia: {{ $pasien->usia }}</p>
            <p class="card-text">Alamat: {{ $pasien->alamat }}</p>
            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
            <a href="{{ route('pasiens.index') }}" class="btn btn-primary">Back to List</a>
        </div>
    </div>
</div>  
@endsection