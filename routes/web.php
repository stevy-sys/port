<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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


Route::get('/welcome', [IndexController::class, 'index'])->name('welcome');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/port-folio', [IndexController::class, 'portfolio'])->name('portfolio');
Route::get('/port-folio/detail', [IndexController::class, 'portfolioShow'])->name('portfolio.show');
Route::get('/service', [IndexController::class, 'service'])->name('service');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/', [IndexController::class, 'welcome'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
