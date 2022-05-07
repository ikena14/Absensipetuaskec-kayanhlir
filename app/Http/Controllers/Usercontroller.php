<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    //
    public function userlogin (){
        return view('user.login');
    }
    public function userregister (){
        return view('user.register');
    }
    public function laporanabsen(){
        return view ('user.laporanabsensi');
    }
    public function absensiview(){
        return view ('user.absen');
    }
}
