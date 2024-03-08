<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tabel;
use App\Http\Controllersr\dataTabel;
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

Route::get('/tabel', [tabel::class, 'tabel']);
Route::get('/data-tabel', [tabel::class, 'data-tabel']);
Route::get('/welcome', [AuthController::class, 'welcome']);

Route::get('/data-tabel', function(){
    return view('halaman.data-tabel');
});
