@extends('welcome')

@section('content')
<div class="container mt-5 pt-4">
    <h1>Good evening, <span class="text-primary">Admin</span></h1>
    <hr>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <h3 class="mb-5">Poli Umum</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">8</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">4</p>
                </div>
            </div>
          </div>

          <div class="carousel-item">
            <h3 class="mb-5">Poli Anak</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">8</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">4</p>
                </div>
            </div>
          </div>

          <div class="carousel-item">
            <h3 class="mb-5">Poli Spesialis</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">8</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">4</p>
                </div>
            </div>
          </div>

          <div class="carousel-item">
            <h3 class="mb-5">Poli THT</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">8</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">4</p>
                </div>
            </div>
          </div>

          <div class="carousel-item">
            <h3 class="mb-5">Poli Mata</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Antrian</h4>
                    <p class="display-4">$currentQueueNumber</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">$totalPatients</p>
                </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    {{-- <div class="row mt-4">
        <div class="col-12 mb-4">
            <h3>Today</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">8</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">4</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h3>Tomorrow</h3>
            <div class="d-flex flex-row">
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Appointments</h4>
                    <p class="display-4">12</p>
                </div>
                <div class="card m-2 p-3 border-primary" style="flex: 1;">
                    <h4>Patients</h4>
                    <p class="display-4">6</p>
                </div>
            </div>
        </div>
    </div> --}}

    <hr>
</div>
@endsection