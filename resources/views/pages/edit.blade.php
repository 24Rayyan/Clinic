@extends('welcome')
@section('tittle')
    Clinic | Edit
@endsection
@section('content')
<div class="container mt-5">
    <h1 class="text-center" style="margin-bottom: 50px; font-weight : 600">Edit Patient<sup><img src="{{asset('addon/hospital.png')}}" style="height:50px" alt=""></sup></h1>
    <div class="card" >
        <div class="card-body">
            <form action="{{ route('pasiens.update', $pasien->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama">Full Name</label>
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
                            <label for="usia">Age</label>
                            <input type="number" class="form-control" id="usia" name="usia" value="{{ $pasien->usia }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="alamat">Adress</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pasien->alamat }}" required>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top:50px">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-block" style="border-radius: 30px">Update</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('pasiens.show', $pasien->id) }}" class="btn btn-secondary btn-block" style="border-radius: 30px">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
