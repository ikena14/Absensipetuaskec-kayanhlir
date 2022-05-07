<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplikasi Absensi</title>
        <link rel="stylesheet" href="{{ ('Bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ ('css/body.css') }}">
        <link rel="stylesheet" href="{{ ('css/time/clock.css') }}">
        <script src="{{('js/runingclock.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </head>
    <body class="antialiased all" onload="initClock()">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Aplikasi Absensi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item btn btn-outline-primary btn-sm">
              <a class="nav-link color-textbuttonmenuheader" href="#">Beranda</a>
            </li>
            <div class="mr-2"></div>
            <li class="nav-item dropdown btn btn-outline-primary btn-sm">
              <a class="nav-link dropdown-toggle color-textbuttonmenuheader" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu User
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item color-textbuttonmenuheader" href="{{route ('userloginaapp')}}">Login</a>
                <a class="dropdown-item color-textbuttonmenuheader" href="{{route ('register-akun')}}">Register</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item color-textbuttonmenuheader" href="#">Logout</a>
              </div>
            </li>
        </div>
        <span class="navbar-text">
          <div class="datetime">
            <div class="date">
                <span id="namahari">Hari</span>,
                <span id="bulan">Bulan</span>
                <span id="tanggal">00</span>,
                <span id="tahun">Tahun</span>
            </div>
            <div class="time">
                <span id="jam">00</span>:
                <span id="menit">00</span>:
                <span id="detik">00</span>-
                <span id="periodewaktu">AM</span>
            </div>
          </div>
        </span>
      </nav>
        <div class="container">
            <div class="card mt-3">
                <div class="card-header bg-dark text-center n-text1">
                    <h1>Aplikasi Absensi</h1>
                </div>
                <div class="card-body">
                    <h5>Internode</h5>
                    <br>
                    <p class="text-center">Selamat Datang di Aplikasi Absensi, Aplikasi Absensi ini digunakan untuk membuat kita semakin <b>Disiplin</b> 
                     dalam menjalankan kegiatan pelayanan terhadap <b>Masyarakat</b></p>
                </div>
            </div>
            <div class="mt-5">
                <div class="card">

                </div>
            </div>
        </div>
    </body>
</html>
