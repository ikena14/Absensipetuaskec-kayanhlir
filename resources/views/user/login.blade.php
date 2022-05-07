@extends('www/cloning')
@section('contentforauth')
    <div class="container">
        <div class="card mt-5 pt-3">
            <div class="card-header text-center">
                <h4>LOGIN APLIKASI</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="pegawai">NIP Pegawai</label>
                    <input type="text" class="form-control">
                    <br>
                    <label for="passwords">Password Pegawai</label>
                    <input type="password" class="form-control">
                </form>
                <button class="btn btn-success btn-sm btn-block"><b>Login</b></button>
                <br>
                <a href="{{route ('register-akun')}}" class="btn btn-primary btn-sm btn-block"><b>Register Akun</b></a>
            </div>
        </div>
    </div>
@endsection