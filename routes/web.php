<?php

use App\Http\Controllers\Module1Controller;
use App\Http\Controllers\Module2Controller;
use App\Http\Controllers\Module3Controller;
use App\Http\Controllers\Module4Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
        return view('index');
    });
Route::group(['middleware'=>'guest'],function(){
    Route::get('/login',[Module1Controller::class,'login'])->name('login');
    Route::post('/login',[Module1Controller::class,'submitLogin'])->name('submit.login');
});
Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard',[Module2Controller::class,'index'])->name('dashboard');
    Route::get('/slip-gaji',[Module3Controller::class,'index'])->name('slip.gaji');
    Route::get('/karyawan',[Module4Controller::class,'index'])->name('tabel.karyawan');
    Route::post('/karyawan',[Module4Controller::class,'editKaryawan'])->name('edit.karyawan');
});
Route::post('/logout', [Module1Controller::class, 'logout'])->name('logout');