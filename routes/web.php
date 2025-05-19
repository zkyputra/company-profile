<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DashController;

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
    return view('dashboard');
});
Route::get('home', function () {
    return view('dashboard');
})->name('home');
Route::get('login', [AuthController::class,'showFormLogin'])->name('login');
Route::post('login',[AuthController::class,'login']);
Route::get('register', [AuthController::class,'showFormRegister'])->name('register');
Route::post('register', [AuthController::class,'register']);
Route::post('kontak/store',[DashController::class,'store'])->name('kontak.store');


Route::group(['middleware' => 'auth'], function () {
    Route::get('logout', [AuthController::class,'logout'])->name('logout');
    Route::get('pegawai',[PegawaiController::class,'index'])->name('pegawai.index');
    Route::get('pegawai/create',[PegawaiController::class,'create'])->name('pegawai.create');
    Route::post('pegawai/store',[PegawaiController::class,'store'])->name('pegawai.store');
    Route::get('pegawai/edit/{id}',[PegawaiController::class,'edit'])->name('pegawai.edit');
    Route::post('pegawai/update/{id}',[PegawaiController::class,'update'])->name('pegawai.update');
    Route::delete('pegawai/destroy/{id}',[PegawaiController::class,'destroy'])->name('pegawai.destroy');
    Route::get('kontak',[KontakController::class,'index'])->name('kontak');

});
