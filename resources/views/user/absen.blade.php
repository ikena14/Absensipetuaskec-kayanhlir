@extends('www/cloning')
@section('contentforauth')
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
            <a class="dropdown-item color-textbuttonmenuheader" href="{{route ('lihat-laporan')}}">Laporan Absensi</a>
            <a class="dropdown-item color-textbuttonmenuheader" href="{{route ('lakukan-absensi')}}">Lakukan Absensi</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item color-textbuttonmenuheader" href="#">Logout</a>
          </div>
        </li>
    </div>
  </nav>
  <div class="container">
    <div class="card mt-5" style="width: 30rem;">
      <div class="card-header">
          <h1>Absensi Petugas Kecamatan Kayan Hilir</h1>
      </div>
      <div class="card-body">
          <form action="" method="post">
              <label for="name">Nama Petugas</label>
              <input type="text" class="form-control">
              <label for="name">Jabatan Petugas</label>
              <input type="text" class="form-control">
              <label for="name">Waktu Absensi</label>
              <input type="datetime-local" class="form-control">
          </form>
          <a href="" class="btn btn-outline-primary"> Lakukan Absensi!</a>
      </div>
    </div>
  </div>
@endsection