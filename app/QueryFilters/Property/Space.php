<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Space extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->whereBetween('space', request($this->filterName()));
    }
}