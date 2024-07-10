@extends('welcome')
@section('tittle')
    Clinic | Umum
@endsection
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Antrian Poli Umum<sup><img src="{{asset('addon/hospital.png')}}" style="height: 50px"  alt=""></sup></h1>
    <div class="mb-4 d-flex justify-content-end">
        <form action="{{ route('resetQueue', 'umum') }}" method="POST" class="mr-2">
            @csrf
            <button type="submit" class="btn btn-danger">Reset Nomor Antrian</button>
        </form>
    
        <form action="{{ route('restoreUmum') }}" method="POST">
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
            @foreach ($tabel_umum as $pasien)
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