<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\RecordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/form', [FormController::class, 'create']);
    Route::post('/form', [FormController::class, 'store']);
    Route::get('/record', [FormController::class, 'record'])->name('record');
    Route::get('/edit/{id}', [FormController::class, 'edit'])->name('edit');
    Route::put('/edit/{id}', [FormController::class, 'update'])->name('update');
    Route::delete('/record/{id}', [FormController::class, 'destroy'])->name('destroy');