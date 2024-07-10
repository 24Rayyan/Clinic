@extends('welcome')
@section('tittle')
    Clinic | Poli
@section('content')
<div class="container mt-5">
    <div class="container">
        <div class="container">
            <h1 style="font-weight: 700">Choose Poly <sup><img src="{{asset('addon/hospital.png')}}"style="height:50px" alt=""></sup></h1>
            <div>
                <h3 style="font-weight: 500; margin-top:30px">Data Patient:</h3>
                <p><span style="font-weight: 700">Name:</span> {{ $pasien->nama }}</p>
                <p><strong>Address:</strong> {{ $pasien->alamat }}</p>
            </div>
            <form action="{{ route('antrian.store')}}" method="POST">
                @csrf
                <input type="hidden" name="poli" value="{{ $pasien->poli }}">
                <input type="hidden" name="nama" value="{{ $pasien->nama }}">
                <input type="hidden" name="NIK" value="{{ $pasien->NIK }}">
                <input type="hidden" name="usia" value="{{ $pasien->usia }}">
                <input type="hidden" name="alamat" value="{{ $pasien->alamat }}">
                <div class="form-group" style="margin-top:50px">
                    <label for="poli">Choose Poly</label>
                    <select name="poli" id="poli" class="form-control">
                        <option value="Poli Umum">Poli Umum</option>
                        <option value="Poli Anak">Poli Anak</option>
                        <option value="Poli Mata">Poli Mata</option>
                        <option value="Poli THT">Poli THT</option>
                        <option value="Poli Spesialis">Poli Spesialis</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" style="border-radius:30px; width:250px">Add to</button>
            </form>
        </div>

@endsection