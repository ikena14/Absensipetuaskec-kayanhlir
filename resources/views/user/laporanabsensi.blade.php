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
      <div class="table table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr class="bg-darktb">
                        <th>Nama Petugas</th>
                        <th>Jabatan Petugas</th>
                        <th>Waktu Absensi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ignasius Kevin Nainggolan</td>
                        <td>IT Code Master</td>
                        <td>10:00:00 PM/05 Mei 2022/Senin</td>
                    </tr>
                </tbody>
            </table>
      </div>
  </div>
@endsection