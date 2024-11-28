<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Time extends Model
{
    protected $fillable =
    [
        'name',
        'stadium',
        'uniform_color',
        'placement',
        'image',
        'coach_id'

    ];
      
    public function coach():BelongsTo
    {
        return $this->belongsTo(Coach::class);
    }

    

}
