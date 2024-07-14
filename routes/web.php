<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailController;
use App\Http\Controllers\SiteController;

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

Route::get('/welcome-page', [SiteController::class, 'index'])->name('welcome');


Route::get('/test-email', [EmailController::class, 'sendEmail']);