<?php

use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user/login',[Usercontroller::class,'userlogin'])
->name('userloginaapp');
Route::get('/user/register',[Usercontroller::class,'userregister'])
->name('register-akun');
Route::get('/user/show-laporan',[Usercontroller::class,'laporanabsen'])
->name('lihat-laporan');
Route::get('/user/absensi',[Usercontroller::class,'absensiview'])
->name('lakukan-absensi');
