<?php

use App\Http\Controllers\PengaduanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/pengaduan', [PengaduanController::class, 'index']);
Route::post('/pengaduan', [PengaduanController::class, 'store']);
