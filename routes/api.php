<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::get('status', function () {
    return [
        "name" => config('app.name', 'Api Laravel'),
        "status" => App::isDownForMaintenance() ? 'down' : 'up'
    ];
});
