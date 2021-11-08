<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Sold extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('is_sold', request($this->filterName()));
    }
}
