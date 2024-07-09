@extends('welcome')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Antrian Poli THT</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4 text-right">
        <form action="{{ route('restoreTHT') }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus semua data?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Restore</button>
        </form>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tabel_tht as $pasien)
                <tr>
                    <td>{{ $pasien->nama }}</td>
                    <td>{{ $pasien->usia }}</td>
                    <td>{{ $pasien->alamat }}</td>
                    <td>
                        <a href="{{ route('add.keterangan', $pasien->NIK) }}" class="btn btn-primary">Add Keterangan</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection