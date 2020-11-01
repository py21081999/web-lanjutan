<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about-me", function () {
	return "Nama Saya <b>Pingky Abdi Maulana</b>";
});

Route::get("/testing-view", function () {
	return view('view-1');
});

use App\Http\Controllers\UtamaController;

Route::get("/utama/test", [UtamaController::class, "test"]);

/* Controller baru 1 */
use App\Http\Controllers\NewPyController;
Route::get("/newpy/tarik", [NewPyController::class, "tarik"]);
Route::get("/newpy/sist", [NewPyController::class, "sist"]);
Route::get("/newpy/semongko", [NewPyController::class, "semongko"]);

/* Controller baru 2 */
use App\Http\Controllers\PyController;
Route::get("py/satu", [PyController::class, "satu"]);
Route::get("py/dua", [PyController::class, "dua"]);
Route::get("py/tiga", [PyController::class, "tiga"]);

/* router dan URL baru */
Route::get("/py", function () {
	return "Tanggal Lahir saya 21 Agustus 1999";
});

Route::get("/alamat", function () {
	return "Jl Soekarno Hatta Km 26 Rt.17";
});

Route::get("/makan", function () {
	return "Makanan Kesukaan Saya <i><b>Nasi Goreng</i></b>";
});

Route::get("/kuliah", function () {
	return "Saya menjadi Mahasiswa di <u>Universitas Muhammadiyah Kalimantan Timur</u>";
});

Route::get("/py1", function () {
	return "Saya Mahasiswa Semester 5";
});
