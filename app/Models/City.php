<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
