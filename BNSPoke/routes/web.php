<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get("/", [HomeController::class, "home"]);
Route::get("/admin", [HomeController::class, "admin"]);

//Bagian Event
Route::get('/event/edit/{id}',[EventController::class,'edit']); //menampilkan edit event
Route::post('/event/update',[EventController::class,'eventupdate']);
Route::get('/event/hapus/{id}',[EventController::class,'hapus']); //untuk menghapus program
Route::get('/event/tambah', [EventController::class, "tambahevent"]);
Route::post('/event/tambah', [EventController::class, "store"]);

//Bagian Pendaftaran
Route::get('/pendaftar/edit/{id}',[PendaftaranController::class,'edit']); //menampilkan edit event
Route::post('/pendaftar/update',[PendaftaranController::class,'pendaftarupdate']);
Route::get('/pendaftar/hapus/{id}',[PendaftaranController::class,'hapus']); //untuk menghapus program
Route::get('/pendaftar/tambah', [PendaftaranController::class, "tambahpendaftar"]);
Route::post('/pendaftar/tambah', [PendaftaranController::class, "store"]);