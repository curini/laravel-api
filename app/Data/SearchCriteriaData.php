<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class SearchCriteriaData extends Data
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public int $page,
        public int $itemsPerPage,
        public array $features,
        public array $locations,
        public array $propertyTypes,
        public array $rooms,
        public array $epc,
        public array $bedrooms,
        public string $sort,
        public ?string $transactionType,
        public string $propertyStatus
    ) {}
}
