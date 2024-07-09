@extends('welcome')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Antrian Poli Anak</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4 d-flex justify-content-end">
        <form action="{{ route('resetQueue', 'anak') }}" method="POST" class="mr-2">
            @csrf
            <button type="submit" class="btn btn-danger">Reset Nomor Antrian</button>
        </form>
    
        <form action="{{ route('restoreAnak') }}" method="POST">
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
            @foreach ($tabel_anak as $pasien)
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