<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Destination extends Model
{

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
