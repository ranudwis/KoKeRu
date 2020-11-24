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


Route::view('login', 'login');
Route::post('login', [AuthenticationController::class, 'login']);

Route::get('/', [HomeController::class, 'home']);

// Manager
Route::get('/manager/dashboard', [DashboardManagerController::class, 'tampilDashboardManager']);
Route::get('/manager/profile', [ManagerProfileController::class, 'index']);
Route::get('/manager/laporan', [ReportController::class, 'index']);
Route::get('/manager/ruangan', [RuanganController::class, 'tampilRuangan']);
Route::post('/manager/ruangan', [RuanganController::class, 'tambahRuangan']);
Route::get('/manager/detail_ruang', [DashboardManagerController::class, 'tampilDetailRuang']);
Route::get('/manager/cs', [CsController::class, 'tampilCS']);
Route::get('/manager/edit_cs/{id}', [CsController::class, 'tampileditCS']);
Route::post('/manager/edit_cs/{id}', [CsController::class, 'editCS']);
Route::get('/manager/hapus_cs/{id}', [CsController::class, 'hapusCS']);
Route::get('/manager/tampil_cs/', [CsController::class, 'tampiltambahCS']);

// CS
Route::get('/cs/dashboard', [DashboardCsController::class, 'ruanganCS']);
// Route::get('/cs/upload/{id}', [DashboardCsController::class, 'uploadCS']);
Route::get('/cs/upload', [DashboardCsController::class, 'uploadCS']);
Route::post('/cs/upload', [DashboardCsController::class, 'buktiCS']);
