<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [PessoaController::class, 'index'])->name('pessoa.index');
Route::get('/completo', [PessoaController::class, 'completo'])->name('pessoa.completo');
Route::get('/create', [PessoaController::class, 'create'])->name('pessoa.create');
Route::post('/store', [PessoaController::class, 'store'])->name('pessoa.store');
Route::delete('/destroy/{pessoa}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');