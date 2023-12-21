<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarawangController;
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

Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'index');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('dashboard', 'index');
});

Route::controller(KarawangController::class)->group(function() {
    Route::get('karawang', 'index');
});
