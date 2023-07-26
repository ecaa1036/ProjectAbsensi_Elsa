<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karyawan</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</head>
<body>
    <style>
        body{
          font-family: "Gill Sans", sans-serif;
            background-color:#f9fafc;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-dark text-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"> {{Auth()->user()->first_name}}</a>
            <button class="navbar-toggler text-light font-weight-bold bg-light text-light rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="home1" class="nav-link {{ Request::segment(1)=='home1'?'active':'' }}">Home</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="home1" class="nav-link {{ Request::segment(1)=='home1'?'active':'' }}">Profil Karyawan</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="absensi2" class="nav-link {{ Request::segment(1)=='absensi2'?'active':'' }}">Absensi Karyawan</a></li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a href="logout" class="nav-link">Keluar</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        @yield('content')
    </div>
    <script>
    $(document).ready(function () {
    $('tabel').DataTable();

    });</script>
</body>
</html>