<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Region extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->whereIn('region_id', request($this->filterName()));
    }
}
