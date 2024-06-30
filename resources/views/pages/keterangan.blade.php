@extends('welcome')

@section('content')
<div class="container">
    <h1>Add Keterangan</h1>
    <div>
        <h3>Data Pasien:</h3>
        <p><strong>Nama:</strong> {{ $pasien->nama }}</p>
        <p><strong>Alamat:</strong> {{ $pasien->alamat }}</p>
    </div>
    <form action="{{ route('store.keterangan') }}" method="POST">
        @csrf
        <input type="hidden" name="pasien_id" value="{{ $pasien->NIK }}">
        <div class="form-group">
            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" id="keterangan" class="form-control" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Keterangan</button>
    </form>
</div>
@endsection