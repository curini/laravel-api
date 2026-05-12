<?php

namespace App\Enums;

enum OtherInfoEnum: string
{
    case HOUSE = 'maison';
    case BUILDING = 'appartement';
    case COMPANY = 'local-commercial';
}
