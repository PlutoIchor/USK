<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('readBuku', [App\Http\Controllers\API\BukuController::class, 'readBuku']);
Route::post('createBuku', [App\Http\Controllers\API\BukuController::class, 'createBuku']);
Route::put('updateBuku/{id}', [App\Http\Controllers\API\BukuController::class, 'updateBuku']);
Route::delete('destroyBuku/{id}', [App\Http\Controllers\API\BukuController::class, 'destroyBuku']);

Route::put('updateIdentitas/{id}', [App\Http\Controllers\API\IdentitasController::class, 'updateIdentitas']);

Route::get('readKategori', [App\Http\Controllers\API\KategoriController::class, 'readKategori']);
Route::post('createKategori', [App\Http\Controllers\API\KategoriController::class, 'createKategori']);
Route::put('updateKategori/{id}', [App\Http\Controllers\API\KategoriController::class, 'updateKategori']);
Route::delete('destroyKategori/{id}', [App\Http\Controllers\API\KategoriController::class, 'destroyKategori']);

Route::post('createPeminjaman', [App\Http\Controllers\API\PeminjamanController::class, 'createPeminjaman']);
Route::post('createPengembalian', [App\Http\Controllers\API\PeminjamanController::class, 'createPengembalian']);
Route::get('laporanPeminjamanPengembalianAdmin', [App\Http\Controllers\API\PeminjamanController::class, 'laporanPeminjamanPengembalianAdmin']);
Route::get('laporanPeminjamanPengembalianUser', [App\Http\Controllers\API\PeminjamanController::class, 'laporanPeminjamanPengembalianUser']);
Route::get('laporanPerpustakaan/{dataYgDiminta}', [App\Http\Controllers\API\PeminjamanController::class, 'laporanPerpustakaan']);
Route::delete('destroyPeminjaman/{id}', [App\Http\Controllers\API\PeminjamanController::class, 'destroyPeminjaman']);

Route::get('readPenerbit', [App\Http\Controllers\API\PenerbitController::class, 'readPenerbit']);
Route::post('createPenerbit', [App\Http\Controllers\API\PenerbitController::class, 'createPenerbit']);

Route::get('readPesan', [App\Http\Controllers\API\PesanController::class, 'readPesan']);
Route::post('createPesan', [App\Http\Controllers\API\PesanController::class, 'createPesan']);

Route::get('getUsers', [App\Http\Controllers\API\UserController::class, 'getUser']);