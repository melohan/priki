<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\UserController;

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

// Users
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/practice/domain/{id}', [PracticeController::class, 'domain'])->name('domain.id');
Route::get('/practice/domain', [PracticeController::class, 'domain'])->name('domain');
Route::get('/practice/details/{id}', [PracticeController::class, 'details'])->name('details');
Route::get('/user/profile/{id}', [UserController::class, 'profile'])->name('profile');

// Admin pages
Route::get('/practice/list', [PracticeController::class, 'list'])->name('adminList')->can('moderate');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
