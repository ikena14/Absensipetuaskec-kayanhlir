@extends('www/cloning')
@section('contentforauth')
    <div class="container">
        <div class="card mt-5 pt-3">
            <div class="card-header text-center">
                <h4>REGISTER APLIKASI</h4>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="pegawai">NIP Pegawai</label>
                    <input type="text" class="form-control">
                    <br>
                    <label for="passwords">Password Pegawai</label>
                    <input type="password" class="form-control">
                    <br>
                    <label for="statuspegawai">Status Pekerjaan Pegawai-Pada Kantor Kecamatan Kayan Hilir</label>
                    <input type="text" class="form-control" name="statuspegawaian">
                    <br>
                </form>
                <button class="btn btn-success btn-sm btn-block"><b>Register Aplikasi</b></button>
            </div>
        </div>
    </div>
@endsection