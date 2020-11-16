<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardManagerController;

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

Route::middleware('manager')->group(function () {
    Route::get('/manager/dashboard', [DashboardManagerController::class, 'tampilDashboardManager']);
});
