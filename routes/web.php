<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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

Route::get('/', [HomepageController::class, 'index'])->name('home.index');
Route::get('/about', [HomepageController::class, 'about'])->name('home.about');
Route::get('/service', [HomepageController::class, 'service'])->name('home.service');
Route::get('/contact', [HomepageController::class, 'contact'])->name('home.contact');
Route::get('/partner', [HomepageController::class, 'partner'])->name('home.partner');