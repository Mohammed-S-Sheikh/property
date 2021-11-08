<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Title extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('title', 'LIKE', '%' . request($this->filterName()) . '%');
    }
}
