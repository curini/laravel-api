<?php

namespace App\Data;

use Spatie\LaravelData\Data;


class SeoData extends Data
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $metaDescription,
        public string $metaTitle,
        public ?string $bodyText
    ) {}
}
