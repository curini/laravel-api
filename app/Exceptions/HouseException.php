<?php

namespace App\Exceptions;

use App\Enums\House\HouseErrorEnum;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class HouseException extends Exception
{
    public function render(Request $request): JsonResponse
    {
        return JsonResponse::fromJsonString(json_encode([
            'error' => $this->getMessage() ?? HouseErrorEnum::DEFAULT->value
        ]), $this->getCode() !== 0 ? $this->getCode() : 500);
    }
}
