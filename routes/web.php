<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Admin\DashboardController;
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
    if (Gate::allows('isAdmin')){
        return redirect()->route('admin.dashboard');
    }
    else if (Gate::allows('isDonatur')){
        return redirect()->route('donatur.dashboard');
    }
    else{
        return redirect('/');
    }
})->name('dashboard');

// Route::prefix('admin')->middleware(['auth:sanctum', 'verified'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index']);
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about-us', [AboutController::class, 'index']);
Route::get('/detail-program-donasi', [AboutController::class, 'index']);
Route::get('/view-program-donasi', [AboutController::class, 'index']);
// Route::get('/login', [LoginController::class, 'index']);

Route::prefix('admin')->middleware(['can:isAdmin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);
});



