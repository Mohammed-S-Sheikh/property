<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Type extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('type', 'LIKE', '%' . request($this->filterName()) . '%');
    }
}
