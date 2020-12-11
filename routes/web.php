<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardManagerController;
use App\Http\Controllers\ManagerProfileController;

use App\Http\Controllers\RuanganController;

use App\Http\Controllers\AuthenticationController;

use App\Http\Controllers\ReportController;
use App\Http\Controllers\CsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardCsController;
use App\Http\Controllers\BuktiController;


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

//login
Route::view('login', 'login');
Route::post('login', [AuthenticationController::class, 'login']);

//home
Route::get('/', [HomeController::class, 'home']);
Route::get('/logout', function () {
    auth()->logout();
    return redirect('/');
});

Route::get('/bukti/{ruang}', [BuktiController::class, 'buktiRuang']);

// Manager
Route::get('/manager/dashboard', [DashboardManagerController::class, 'tampilDashboardManager']);
Route::get('/manager/profile', [ManagerProfileController::class, 'index']);
Route::post('/manager/profile', [ManagerProfileController::class, 'editProfil']);
Route::get('/manager/laporan', [ReportController::class, 'index']);
Route::get('/manager/laporan/pdf', [ReportController::class, 'pdf']);
Route::get('/manager/laporan/excel', [ReportController::class, 'excel']);
Route::get('/manager/ruangan', [RuanganController::class, 'tampilRuangan']);
Route::get('/manager/tambah_ruangan', [RuanganController::class, 'tampiltambahRuangan']);
Route::post('/manager/tambah_ruangan', [RuanganController::class, 'tambahRuangan']);
Route::post('/manager/edit_ruangan/{id}', [RuanganController::class, 'editRuangan']);
Route::get('/manager/edit_ruangan/{id}', [RuanganController::class, 'tampileditRuangan']);
Route::get('/manager/hapus_ruangan/{id}', [RuanganController::class, 'hapusRuangan']);

//CS
Route::get('/manager/detail_ruang', [DashboardManagerController::class, 'tampilDetailRuang']);
Route::get('/manager/cs', [CsController::class, 'tampilCS']);
Route::get('/manager/edit_cs/{id}', [CsController::class, 'tampileditCS']);
Route::post('/manager/edit_cs/{id}', [CsController::class, 'editCS']);
Route::get('/manager/hapus_cs/{id}', [CsController::class, 'hapusCS']);
Route::get('/manager/tambah_cs', [CsController::class, 'tampiltambahCS']);
Route::post('/manager/tambah_cs', [CsController::class, 'tambahCS']);

// CS
Route::get('/cs/dashboard', [DashboardCsController::class, 'ruanganCS']);
Route::get('/cs/upload/{id}', [DashboardCsController::class, 'showCS']);
Route::post('/cs/upload/{id}', [DashboardCsController::class, 'storeCS']);
Route::delete('/bukti/{bukti}', [DashboardCSController::class, 'hapusBukti']);
