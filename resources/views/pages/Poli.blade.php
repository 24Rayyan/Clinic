@extends('welcome')

@section('content')
<div class="container mt-5">
    <div class="container">
        <div class="container">
            <h1>Pilih Poli</h1>
            <div>
                <h3>Data Pasien:</h3>
                <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
                <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
            </div>
            <form action="{{ route('antrian.store')}}" method="POST">
                @csrf
                <input type="hidden" name="poli" value="{{ $pasien->poli }}">
                <input type="hidden" name="nama" value="{{ $pasien->nama }}">
                <input type="hidden" name="NIK" value="{{ $pasien->NIK }}">
                <input type="hidden" name="usia" value="{{ $pasien->usia }}">
                <input type="hidden" name="alamat" value="{{ $pasien->alamat }}">
                <div class="form-group">
                    <label for="poli">Pilih Poli:</label>
                    <select name="poli" id="poli" class="form-control">
                        <option value="Poli Umum">Poli Umum</option>
                        <option value="Poli Anak">Poli Anak</option>
                        <option value="Poli Mata">Poli Mata</option>
                        <option value="Poli THT">Poli THT</option>
                        <option value="Poli Spesialis">Poli Spesialis</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambahkan ke Antrian</button>
            </form>
        </div>

@endsection