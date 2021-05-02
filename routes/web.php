<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonaturController;
use App\Http\Controllers\Admin\PantiController;
use App\Http\Controllers\Admin\ProgramDonasiController;
use App\Http\Controllers\Admin\SliderController;

use App\Http\Controllers\Donatur\ProfilController;

use App\Http\Controllers\Guest\IndexController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Guest\AboutController;
use App\Http\Controllers\Guest\LoginController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    if (Gate::allows('isAdmin')) {
        return redirect()->route('admin.dashboard');
    } else if (Gate::allows('isDonatur')) {
        return redirect()->route('donatur.dashboard');
    } else {
        return redirect('/');
    }
})->name('dashboard');

// Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index']);
// });

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/detail-program-donasi/{id}', [IndexController::class, 'detailProgramDonasi']);
Route::get('/detail-panti-asuhan/{id}', [IndexController::class, 'detailPantiAsuhan']);
Route::get('/donasi', [IndexController::class, 'donasi']);
Route::get('/view-program-donasi', [IndexController::class, 'viewProgramDonasi']);
Route::post('/view-program-donasi-search', [IndexController::class, 'viewProgramDonasiSearch']);
Route::get('/view-panti-asuhan', [IndexController::class, 'viewPantiAsuhan']);
Route::post('/view-panti-asuhan-search', [IndexController::class, 'viewPantiAsuhanSearch']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/about-us', [AboutController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/logged-in', [LoginController::class, 'loggedIn'])->name('logged-in');

Route::prefix('donatur')->middleware(['can:isDonatur'])->group(function () {
    Route::get('/', [ProfilController::class, 'index']);
    Route::get('/profil', [ProfilController::class, 'index']);
    Route::get('/dashboard', [ProfilController::class, 'index'])->name('donatur.dashboard');
});

Route::prefix('admin')->middleware(['can:isAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/panti', [PantiController::class, 'index']);
    Route::get('/add-panti', [PantiController::class, 'addPanti']);
    Route::post('/add-panti-submit', [PantiController::class, 'addPantiSubmit'])->name('addpantisubmit');
    Route::get('/edit-panti/{id}', [PantiController::class, 'editPanti']);
    Route::post('/edit-panti-submit', [PantiController::class, 'editPantiSubmit']);


    Route::get('/program-donasi', [ProgramDonasiController::class, 'index']);
    Route::get('/add-program-donasi', [ProgramDonasiController::class, 'addProgramDonasi']);
    Route::post('/add-program-donasi-submit', [ProgramDonasiController::class, 'addProgramDonasiSubmit']);
    Route::get('/edit-program-donasi/{id}', [ProgramDonasiController::class, 'editProgramDonasi']);
    Route::post('/edit-program-donasi-submit', [ProgramDonasiController::class, 'editProgramDonasiSubmit']);

    Route::get('/donatur', [DonaturController::class, 'index']);

    Route::get('/input-slider', [SliderController::class, 'index']);
    Route::post('/input-slider-submit', [SliderController::class, 'inputSliderSubmit']);
});
