<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class City extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->whereIn('city_id', request($this->filterName()));
    }
}
