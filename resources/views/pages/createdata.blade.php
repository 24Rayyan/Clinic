@extends('welcome')
@section('tittle')
    Clinic | Create Data
@endsection
@section('content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

    h1{
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 700;
    font-style: normal;
    font-variation-settings:
        "slnt" 0;
    }

    h2{
    font-family: "Inter", sans-serif;
    font-optical-sizing: auto;
    font-weight: 200;
    font-style: normal;
    font-variation-settings:
        "slnt" 0;
    }
</style>

<div class="container mt-5">
    <div class="flex items-center">
        <h1 class="mr-2">Welcome to The Clinicare<sup><img src="{{asset('addon/hospital.png')}}" style="height:50px" alt=""></sup></h1>
    </div>
    <h2>Insert Data Patient</h2>

    <form action="{{ route('pasiens.store') }}" method="POST" style="margin-top: 80px">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Full Name</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter name here">
            </div>
            <div class="form-group col-md-6">
                <label for="NIK">NIK</label>
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