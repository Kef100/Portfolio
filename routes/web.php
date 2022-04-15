<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//General Routes
Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {

//  Home
    Route::get('/', [IndexController::class, 'index'])->name('index');

// Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//  Projects
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');


    Route::get('/admin', function () {
        return view('admin.login');
    })->name('admin');

    //Admin Routes

    //Login
    Route::get('/admin', [DashboardController::class, 'index'])->name('login');
    Route::post('/admin', [DashboardController::class, 'login'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Dashboard
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    });
});
