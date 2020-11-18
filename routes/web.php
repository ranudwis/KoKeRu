<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardManagerController;
use App\Http\Controllers\ManagerProfileController;
<<<<<<< HEAD
use App\Http\Controllers\RuanganController;
=======
use App\Http\Controllers\AuthenticationController;
>>>>>>> fd97fc6ebfc5094b03fd4d903cbdf9440fa6f3a5

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
// TODO: Make middleware
// Route::middleware('manager')->group(function () {
    Route::get('/manager/dashboard', [DashboardManagerController::class, 'tampilDashboardManager']);
    Route::get('/manager/profile', [ManagerProfileController::class, 'index']);
    Route::get('/manager/ruangan', [RuanganController::class, 'tampilRuangan']);

// });


