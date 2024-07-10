@extends('welcome')
@section('tittle')
    Clinic | Keterangan
@endsection
@section('content')
<div class="container">
    <h1 style="margin-bottom:20px">Add Description<sup><img src="{{asset('addon/hospital.png')}}"style="height:50px" alt=""></sup></h1>

    <div>
        <h3>Data Patien:</h3>
        <p><strong>Full Name:</strong> {{ $pasien->nama }}</p>
        <p><strong>Address:</strong> {{ $pasien->alamat }}</p>
    </div>
    <form action="{{ route('store.keterangan') }}" method="POST">
        @csrf
        <input type="hidden" name="pasien_NIK" value="{{ $pasien->NIK }}">
        <div class="form-group mt-5" >
            <label for="keterangan">Description:</label>
            <textarea name="keterangan" id="keterangan" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection