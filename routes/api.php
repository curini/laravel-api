<?php

use App\Enums\House\HouseErrorEnum;
use App\Http\Controllers\Api\HouseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::name('api.')->group(function () {
    Route::get('status', function () {
        return [
            "name" => config('app.name', 'Api Laravel'),
            "status" => App::isDownForMaintenance() ? 'down' : 'up'
        ];
    })->name('status');

    Route::get('properties/{country}/{state}/{other_info?}', [
        HouseController::class,
        'properties'
    ])->name('properties');

    Route::fallback(function (Request $request) {
        return response()->json(
            ["error" => HouseErrorEnum::MISSING->value],
            404
        );
    });
});
