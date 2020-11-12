<?php

use Illuminate\Support\Facades\Route;




Route::get('/', [App\Http\Controllers\Site\SiteController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home')->middleware('auth');
Route::get('/home/processo', [App\Http\Controllers\Admin\ProcessoController::class, 'index'])->name('admin.processo')->middleware('auth');
Route::post('/home/processo', [App\Http\Controllers\Admin\ProcessoController::class, 'processoStore'])->name('processo.store')->middleware('auth');
Route::get('/home/processo/cadastrar', [App\Http\Controllers\Admin\ProcessoController::class, 'cadastrar'])->name('inserir.processo')->middleware('auth');
