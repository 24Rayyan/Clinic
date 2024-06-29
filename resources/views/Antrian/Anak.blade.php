@extends('welcome')

@section('content')
<div class="container">
    <h1>Antrian Poli Anak</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tabel_anak as $pasien)
                <tr>
                    <td>{{ $pasien->pasien->nama }}</td>
                    <td>{{ $pasien->pasien->usia }}</td>
                    <td>{{ $pasien->pasien->alamat }}</td>
                    <td>
                        <a href="{{ route('add.keterangan', $pasien->id) }}" class="btn btn-primary">Add Keterangan</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection