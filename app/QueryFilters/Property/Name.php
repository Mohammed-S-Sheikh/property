<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Name extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('name', 'LIKE', '%' . request($this->filterName()) . '%');
    }
}
