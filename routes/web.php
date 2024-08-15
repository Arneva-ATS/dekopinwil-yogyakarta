<?php

use App\Http\Controllers\PengajuanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/pengurus', function () {
    return view('pages.pengurus.index');
})->name('pengurus');

Route::get('/', function () {
    return view('pages.profil.index');
})->name('profil');

Route::get('/berita', function () {
    return view('pages.berita.index');
})->name('berita');

Route::get('/kontak', function () {
    return view('pages.kontak.index');
})->name('kontak');
Route::get('/demografi', function () {
    return view('pages.demografi.index');
})->name('demografi');
Route::get('/agenda', function () {
    return view('pages.agenda.index');
})->name('agenda');
Route::get('/galeri', function () {
    return view('pages.galeri.index');
})->name('galeri');
Route::get('/notaris', function () {
    return view('pages.notaris.index');
})->name('notaris');

// Route::prefix('tentang-kami')->name('tentang-kami.')->group(function () {
//     Route::get('visi-misi', function () {
//         return view('pages.tentang-kami.visi-misi');
//     })->name('visi-misi');
