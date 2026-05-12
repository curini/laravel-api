<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class PropertyData extends Data
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public SeoData $seo,
        public SearchCriteriaData $searchCriteria,
        public ?MainLocationData $mainLocation,
        public array $serpSlug,
        public array $canonicalSerpSlug,
        public array $items,
        public int $totalItems,
        public int $itemsPerPage,
        public array $similarItems,
        public array $soldItems,
        public array $breadcrumbs,
        public array $seoLinks,
        public int $propertyHighestPrice,
        public int $propertyLowestPrice
    ) {}
}
