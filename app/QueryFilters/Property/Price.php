<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Price extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->whereBetween('price', request($this->filterName()));
    }
}
