<?php

use App\Http\Controllers\PablikController;
use App\Http\Controllers\PribadiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PablikController::class, 'index'])->name('home');

Route::get('/blog', [PablikController::class, 'blog'])->name('blog');

Route::get('/blog/postingan/{id}', [PablikController::class, 'postingan'])->name('postingan');

Route::get('/profile', [PablikController::class, 'profile'])->name('profile');

Route::get('/ayakashi', [PribadiController::class, 'index'])->name('admin');

Route::get('/ayakashi/postingan', [PribadiController::class, 'postingan'])->name('admpostingan');

Route::get('/ayakashi/buatpostingan', [PribadiController::class, 'buatpostingan'])->name('buatpostingan');

Route::post('/ayakashi/buatpostingan/store', [PribadiController::class, 'postinganstore'])->name('storepostingan');

Route::get('/ayakahsi/postingan/edit', [PribadiController::class,'editpostingan'])->name('editpostingan');

Route::post('/ayakashi/postingan/update', [PribadiController::class, 'updatepostingan'])->name('updatepostingan');

Route::delete('/ayakashi/postingan/delete', [PribadiController::class, 'deletepostingan'])->name('deletepostingan');

Route::get('/ayakashi/prestasi', [PribadiController::class, 'prestasi'])->name('admprestasi');

Route::post('/ayakashi/prestasi/store', [PribadiController::class, 'prestasistore'])->name('prestasistre');

Route::post('/ayakashi/prestasi/update', [PribadiController::class, 'updateprestasi'])->name('updateprestasi');

Route::delete('ayakashi/prestasi/delete', [PribadiController::class, 'deleteprestasi'])->name('deleteprestasi');



Route::middleware('auth')->group(function () {
    
});

require __DIR__.'/auth.php';
