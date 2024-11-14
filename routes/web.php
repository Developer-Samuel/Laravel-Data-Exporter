<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');

Route::prefix('/generate')->name('generate.')->group(function () {
    Route::get('/xlsx', [FileController::class, 'generateXLSX'])->name('xlsx');
    Route::get('/xml', [FileController::class, 'generateXML'])->name('xml');
    Route::get('/txt', [FileController::class, 'generateTXT'])->name('txt');
    Route::get('/csv', [FileController::class, 'generateCSV'])->name('csv');
});

