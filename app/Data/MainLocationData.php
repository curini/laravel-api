<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class MainLocationData extends Data
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $code,
        public string $name,
        public string $nameWithCode,
        public string $administrativeType,
        public string $_layerName,
        public string $slug
    ) {}
}
