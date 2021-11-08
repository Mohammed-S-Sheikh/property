<?php

namespace App\QueryFilters\Property;

use App\QueryFilters\Filter;

class User extends Filter
{
    public function applyFilter($builder)
    {
        return $builder->where('user_id', request($this->filterName()));
    }
}
