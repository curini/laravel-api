<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyRequest;
use App\Services\PropertyService;

class HouseController extends Controller
{
    public function properties(PropertyRequest $request)
    {
        $propertyService = new PropertyService();
        $request->validated();
        return $propertyService->call($request->toArray());
    }
}
