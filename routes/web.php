<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/lang/{lang}', function ($lang) {
    session(['locale' => $lang]);
    return back();
})->name('lang.switch');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/services',[ServiceController::class, 'index'])->name('service');
    Route::get('dashboard',[DashboardController::class, 'index'])->name('dashboard');
    Route::get('/clients',[ClientController::class, 'index'])->name('client');
    Route::get('/products',[ProductController::class, 'index'])->name('product');
    Route::get('/projects',[ProjectController::class, 'index'])->name('project');
    });

require __DIR__.'/auth.php';
