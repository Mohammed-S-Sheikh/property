<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Section extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('path', 'LIKE', request($this->filterName()) . '%');
    }
}
