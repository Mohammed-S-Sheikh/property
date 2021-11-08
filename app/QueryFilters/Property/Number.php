<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Number extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('number', 'LIKE', '%' . request($this->filterName()) . '%');
    }
}
