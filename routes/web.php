<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormFileController;
use Laravel\Fortify\RoutePath;
use Laravel\Fortify\Http\Controllers\NewPasswordController;

Route::get('/', function () {
    return 'api laravel';
})->name('home');

Route::prefix('formfile')->name('form.file.')->middleware('auth:web')->group(function () {
    Route::get('create', [FormFileController::class, 'create'])->name('create');
    Route::post('store', [FormFileController::class, 'store'])->name('store');
});


Route::get(RoutePath::for('login', '/login'), function () {
    return view('login');
})
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('login');

Route::get(RoutePath::for('password.reset', '/reset-password/{token}'), [NewPasswordController::class, 'create'])
    ->middleware(['guest:' . config('fortify.guard')])
    ->name('password.reset');
