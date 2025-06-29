<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Media extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'media_id',
        'media_description',
        'media_origin_type',
        'media_file_type',
        'uploaded_by',
    ];

    //
    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }
}
