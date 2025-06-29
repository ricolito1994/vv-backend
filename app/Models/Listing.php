<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listing extends Model
{
    //
    use SoftDeletes;
    
    protected $fillable = [
        'listing_name',
        'listing_description',
        'listing_pax_adult',
        'listing_pax_children',
        'listing_total_pax',
        'listing_price',
        'listing_rating_average'
    ];
}
