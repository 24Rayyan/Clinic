@extends('welcome')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Pasien</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $pasien->nama }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="NIK">NIK</label>
                            <input type="text" class="form-control" id="NIK" name="NIK" value="{{ $pasien->NIK }}" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="usia">Usia</label>
                            <input type="number" class="form-control" id="usia" name="usia" value="{{ $pasien->usia }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pasien->alamat }}" required>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-block">Update</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('pasiens.show', $pasien->id) }}" class="btn btn-secondary btn-block">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
