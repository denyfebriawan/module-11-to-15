<?php

use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'cekSession']);

Route::get('/features', [FeaturesController::class, 'cekSession']);

Route::get('/get-pesan', [HomeController::class, 'pesan']);

Route::get('/form', [HomeController::class, 'formPage']);

Route::post('/create', [HomeController::class, 'createData']);