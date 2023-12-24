<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KarawangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\PurwakartaController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
});

Route::controller(KarawangController::class)->group(function () {
    Route::get('karawang', 'index');
});
Route::controller(PurwakartaController::class)->group(function () {
    Route::get('purwakarta', 'index');
    // Route::get('databay/show/{gardu_id}', 'show');
});

Route::get('databay/show/{gardu_id}', [LayoutController::class, 'show'])->name('show');

// Route::get('', 'show');
