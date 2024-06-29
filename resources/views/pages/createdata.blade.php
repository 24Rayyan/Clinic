@extends('welcome')

@section('content')
<div class="container mt-5">
    <h1>Welcome to The Clinicare</h1>
    <h2>Insert Data Patient</h2>
    <form action="{{ route('pasiens.store') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Full Name</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter name here">
            </div>
            <div class="form-group col-md-6">
                <label for="NIK">ID Number</label>
                <input type="number" class="form-control" id="NIK" name="NIK" placeholder="0000000000000000">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="usia">Age</label>
                <input type="number" class="form-control" id="usia" name="usia" placeholder="Age">
            </div>
            <div class="form-group col-md-6">
                <label for="alamat">Address</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter your Address">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" style="width: 200px;margin-top:50px">Save</button>
    </form>
</div>
    
@endsection