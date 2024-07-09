@extends('welcome')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Detail Pasien</h1>
    <div class="card">
        <div class="card-body">
            <div class="ml-3">
                <h5 class="card-title">Nama: {{ $pasien->nama }}</h5>
                <p class="card-text">NIK: {{ $pasien->NIK }}</p>
                <p class="card-text">Usia: {{ $pasien->usia }}</p>
                <p class="card-text">Alamat: {{ $pasien->alamat }}</p>
            </div>

            <div class="card mt-4">
                <div class="card-header text-black">
                    Keterangan
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($pasien->keterangans as $keterangan)
                    <li class="list-group-item">
                        <div class="card-body">
                            <p class="card-text mb-1">{{ $keterangan->keterangan }}</p>
                            <small class="text-muted">{{ $keterangan->created_at->format('d M Y') }}</small>
                            <hr>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Tambahkan informasi lainnya sesuai kebutuhan -->
            <div class="mt-4 row">
                <div class="col-md-4">
                    <a href="{{ route('pasiens.index') }}" class="btn btn-outline-secondary btn-block">Kembali ke Daftar</a>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('pasiens.edit', $pasien->id) }}" class="btn btn-outline-primary btn-block">Edit</a>
                </div>
                <div class="col-md-4">
                    <form action="{{ route('pasiens.destroy', $pasien->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger btn-block"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection