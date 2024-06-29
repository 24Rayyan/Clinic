@extends('welcome')

@section('content')
<div class="container">
    <h1 class="mb-4">Patients Appointment</h1>
    <div class="container" style="display: inline">
        <div class="mb-4" style="float:right">
            <form action="{{ route('pasiens.search') }}" method="GET" class="form-inline">
                <input type="text" name="search" class="form-control mr-2" placeholder="Search" value="{{ request()->query('search') }}">
                <button type="submit" class="btn btn-outline-danger"><img src="{{ asset('addon/search.png') }}" style="width:25px; height:25px" alt=""></button>
            </form>
        </div>
    </div>      
    <!-- Tabel Data Pasien -->
    <table class="table table-borderless mt-4" style="border: 2px solid #dc3545; border-radius: 10px;">
        <thead>
            <tr style="border-bottom: 2px solid #dc3545;">
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Usia</th>
                <th>Alamat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pasiens as $pasien)
            <tr>
                <td style="color: #dc3545;">{{ $pasien->id }}</td>
                <td>{{ $pasien->nama }}</td>
                <td style="color: #dc3545;">{{ $pasien->NIK }}</td>
                <td style="color: #dc3545;">{{ $pasien->usia }}</td>
                <td style="color: #dc3545;">{{ $pasien->alamat }}</td>
                <td style="color: #dc3545; font-weight:bold">
                    <a href="{{ route('pasiens.show', $pasien->id) }}" class="btn btn-outline-danger btn-sm">Show</a>
                    <form action="{{ route('pilihpoli', $pasien->id) }}" method="get" style="display:inline">
                        @csrf
                        <input type="hidden" name="pasien_id" value="{{ $pasien->id }}">
                        <button type="submit" class="btn btn-outline-danger btn-sm">Add to Antrian</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Link Pagination -->
    <div class="d-flex justify-content-center" >
        //pagination masih di coba
    </div>
</div>  
@endsection

