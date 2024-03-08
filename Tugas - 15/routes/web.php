<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tabel;
use App\Http\Controllers\CastControler;
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

Route::get('/', [tabel::class, 'tabel']);
Route::get('/data-tabel', [tabel::class, 'data-tabel']);
Route::get('/welcome', [AuthController::class, 'welcome']);

Route::get('/data-tabel', function(){
    return view('halaman.data-tabel');
});


//cast crud
// create
Route::get('/cast/create', [CastControler::class, 'create']);
// kirim database
Route::post('/cast', [CastControler::class, 'store']);

//read
Route::get('/cast', [CastControler::class, 'index']);
//pencet detail
Route::get('/cast/{cast_id}', [CastControler::class, 'show']);

//Update
Route::get('/cast/{cast_id}/edit', [CastControler::class, 'edit']);
//update database
Route::put('/cast/{cast_id}', [CastControler::class, 'update']);

//Delete
Route::delete('/cast/{cast_id}', [CastControler::class, 'destroy']);
