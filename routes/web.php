<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProfilController;


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
    return view('Halamanawal');
});

Route::get('/Profil', [ProfilController::class, "Profil"]);
Route::post('/Profil', [ProfilController::class, "Profil"]);

Route::get('/Pendaftaran', [PendaftaranController::class, "Pendaftaran"]);
Route::post('/Pendaftaran', [PendaftaranController::class, "Pendaftaran"]);

Route::get('/Login', [LoginController::class, "Login"]);
Route::post('/Login', [LoginController::class, "Login"]);

