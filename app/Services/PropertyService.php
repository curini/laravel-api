<?php

namespace App\Services;

use App\Data\PropertyData;
use App\Enums\House\HouseErrorEnum;
use App\Exceptions\HouseException;
use App\Http\Requests\PropertyRequest;
use Exception;


class PropertyService
{
    private string $path;

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->path = config('house.properties_path');
    }

    public function call(array $request): mixed
    {
        $httpClient = new HouseClient();
        $response = $httpClient->get($this->path, data_get($request, 'query'));

        try {
            $data = PropertyData::from($response);
            return $data;
        } catch (Exception $e) {
            $httpClient->trace('error', HouseErrorEnum::FORMAT->value, $e->getMessage());
            throw new HouseException(HouseErrorEnum::FORMAT->value);
        }
    }
}
