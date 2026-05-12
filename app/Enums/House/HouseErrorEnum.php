<?php

namespace App\Enums\House;

enum HouseErrorEnum: string
{
    case FORMAT = 'Failed to format the response.';
    case RESPONSE = 'The response failed.';
    case SERVICE = 'The service is currently unavailable.';
    case DEFAULT = 'An error has occurred.';
    case MISSING = 'Not found.';
}
