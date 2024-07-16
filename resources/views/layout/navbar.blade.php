<style>
    body {
        display: flex;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
    height: 30px;
    width: 30px;
    background-color: rgb(0 0 0 / 65%);
    background-size: 50%, 50%;
    border-radius: 50%;
    margin-top:230px;
    border-radius:50px;
}

    .topbar {
        width: 100%;
        height: 60px;
        background-color: #ffffff;
        border-bottom: 5px solid #D8D8D8;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    .sidebar {
        height: calc(100vh - 60px);
        width: 250px;
        position: fixed;
        top: 60px;
        left: 0;
        background-color: #ffffff;
        padding-top: 20px;
    }
    .sidebar a {
        padding: 10px 15px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block;
        border-left: 3px solid transparent;
    }
    .sidebar a:hover .sidebar a.active {
        background-color: #e9ecef;
        border-left: 3px solid #dc3545;
        color: #dc3545;
    }
    .sidebar .btn {
        margin: 20px 15px;
        width: calc(100% - 30px);
    }
    .content {
        margin-left: 250px;
        padding: 20px;
        margin-top: 60px;
        width: calc(100% - 250px);
    }
    .card {
   border: 2px solid #dc3545;
   border-radius: 10px;
}

    .sidebar a:hover{
        background-color: #D8D8D8;
        border-radius: 30px;
    }

    .sidebar .menu a{
        margin-top: 20px;
        font-weight: 500;
    }

.text-primary {
   color: #dc3545 !important;
}

table td, table th {
    padding: 10px;
    border: none;
}
.form-group label {
    font-weight: bold;
}
.form-control {
    border-radius: 10px;
}
.container {
    text-align: center;
}
</style>
<div class="topbar">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <img src="{{ asset('addon/hospital.png') }}" alt="Hospital Icon" style="height: 50px; margin-right: 7px;">
            <h4 class="mb-0 ml-3"  style="color: black">Health Care</h4>
        </div>
    </div>
</div>
<div class="sidebar" style="margin-left:30px">
    <div class="menu">
        <a href="{{ route('dashboard') }}" class="active"><img src="{{asset('addon/ftx-token.png')}}" style="height:23px; margin-right:20px"> Dashboard</a>
        <a href="{{ route('pasiens.index') }}"><img src="{{asset('addon/calendar-tick.png')}}" style="height:23px; margin-right:10px"> Patient Appointments</a>
        <a href="#" data-toggle="collapse" data-target="#submenu1" aria-expanded="false" aria-controls="submenu1"><img src="{{asset('addon/profile-2user.png')}}" style="height:23px; margin-right:20px"> Patiens Queue <i class="fas fa-chevron-right" style="float:right; margin-top:5px;"></i></a>     
    </div>
     <div class="collapse" id="submenu1" >
        <a href="{{ route('Antrian.Anak') }}" >Poli Anak</a>
        <a href="{{ route('Antrian.Umum') }}" >Poli Umum</a>
        <a href="{{ route('Antrian.Mata') }}" >Poli Mata</a>
        <a href="{{ route('Antrian.THT') }}" >Poli THT</a>
        <a href="{{ route('Antrian.Spesialis') }}" >Poli Spesialis</a>

    </div>

</div>