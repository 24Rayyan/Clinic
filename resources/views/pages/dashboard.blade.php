@extends('welcome')

@section('content')
<div class="container mt-5 pt-4">
    <h1>Good evening, <span class="text-primary">Admin</span></h1>
    <hr>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1: Poli Mata -->
            <div class="carousel-item active">
                <h3 class="mb-5">Poli Mata</h3>
                <div class="d-flex flex-row">
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        <h4>Nomor Antrian Anda:</h4>
                        <p>{{ $nomorAntrianMata ?? 'Belum ada antrian' }}</p>
                    </div>
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        @php
                        $totalAntrianMata = \App\Models\TabelMata::count();
                        @endphp
                        
                        @if ($totalAntrianMata > 0)
                            <h4>Total Antrian:</h4>
                            <p>{{ $totalAntrianMata }}</p>
                        @else
                            <p>Tidak ada antrian saat ini.</p>
                        @endif       
                    </div>
                </div>
                <form method="POST" action="{{ route('next', 'mata') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
    
            <!-- Item 2: Poli Umum -->
            <div class="carousel-item">
                <h3 class="mb-5">Poli Umum</h3>
                <div class="d-flex flex-row">
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        <h4>Nomor Antrian Anda:</h4>
                        <p>{{ $nomorAntrianUmum ?? 'Belum ada antrian' }}</p>
                    </div>
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        @php
                        $totalAntrianUmum = \App\Models\TabelUmum::count();
                        @endphp
                        
                        @if ($totalAntrianUmum > 0)
                            <h4>Total Antrian:</h4>
                            <p>{{ $totalAntrianUmum }}</p>
                        @else
                            <p>Tidak ada antrian saat ini.</p>
                        @endif       
                    </div>
                </div>
                <form method="POST" action="{{ route('next', 'umum') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
    
            <!-- Item 3: Poli Anak -->
            <div class="carousel-item">
                <h3 class="mb-5">Poli Anak</h3>
                <div class="d-flex flex-row">
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        <h4>Nomor Antrian Anda:</h4>
                        <p>{{ $nomorAntrianAnak ?? 'Belum ada antrian' }}</p>
                    </div>
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        @php
                        $totalAntrianAnak = \App\Models\TabelAnak::count();
                        @endphp
                        
                        @if ($totalAntrianAnak > 0)
                            <h4>Total Antrian:</h4>
                            <p>{{ $totalAntrianAnak }}</p>
                        @else
                            <p>Tidak ada antrian saat ini.</p>
                        @endif       
                    </div>
                </div>
                <form method="POST" action="{{ route('next', 'anak') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
    
            <!-- Item 4: Poli THT -->
            <div class="carousel-item">
                <h3 class="mb-5">Poli THT</h3>
                <div class="d-flex flex-row">
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        <h4>Nomor Antrian Anda:</h4>
                        <p>{{ $nomorAntrianTHT ?? 'Belum ada antrian' }}</p>
                    </div>
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        @php
                        $totalAntrianTHT = \App\Models\TabelTHT::count();
                        @endphp
                        
                        @if ($totalAntrianTHT > 0)
                            <h4>Total Antrian:</h4>
                            <p>{{ $totalAntrianTHT }}</p>
                        @else
                            <p>Tidak ada antrian saat ini.</p>
                        @endif       
                    </div>
                </div>
                <form method="POST" action="{{ route('next', 'tht') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
    
            <!-- Item 5: Poli Spesialis -->
            <div class="carousel-item">
                <h3 class="mb-5">Poli Spesialis</h3>
                <div class="d-flex flex-row">
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        <h4>Nomor Antrian Anda:</h4>
                        <p>{{ $nomorAntrianSpesialis ?? 'Belum ada antrian' }}</p>
                    </div>
                    <div class="card m-2 p-3 border-primary" style="flex: 1;">
                        @php
                        $totalAntrianSpesialis = \App\Models\TabelSpesialis::count();
                        @endphp
                        
                        @if ($totalAntrianSpesialis > 0)
                            <h4>Total Antrian:</h4>
                            <p>{{ $totalAntrianSpesialis }}</p>
                        @else
                            <p>Tidak ada antrian saat ini.</p>
                        @endif       
                    </div>
                </div>
                <form method="POST" action="{{ route('next', 'spesialis') }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Next</button>
                </form>
            </div>
        </div>
    
        <!-- Tombol navigasi carousel -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    
    </div>
    <hr>
</div>
@endsection