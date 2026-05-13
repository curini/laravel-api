<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormFileController;

Route::get('/', function () {
    return 'api laravel';
})->name('home');

Route::prefix('formfile')->name('form.file.')->group(function () {
    Route::get('create', [FormFileController::class, 'create'])->name('create');
    Route::post('store', [FormFileController::class, 'store'])->name('store');
});
