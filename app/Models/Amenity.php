<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelTrait;

class Amenity extends Model
{
    //
    use SoftDeletes;

    public function media (): MorphMany 
    {
        return $this->morphMany(Listing::class, 'mediable');
    }
}
