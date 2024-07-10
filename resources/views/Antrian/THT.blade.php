@extends('welcome')
@section('tittle')
    Clinic | Antrian THT
@endsection
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Antrian Poli THT<sup><img src="{{asset('addon/hospital.png')}}" alt=""></sup></h1>
    <div class="mb-4 d-flex justify-content-end">
        <form action="{{ route('resetQueue', 'tht') }}" method="POST" class="mr-2">
            @csrf
            <button type="submit" class="btn btn-danger">Reset Nomor Antrian</button>
        </form>
    
        <form action="{{ route('restoreTHT') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><img src="{{asset ('addon/refresh.png')}}" style="height: 25px; margin-right:8px" alt="">Restore</button>
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