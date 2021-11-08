<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class Note extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('notes', 'LIKE', '%' . request($this->filterName()) . '%');
    }
}
