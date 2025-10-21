<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function destination()
    {
        return $this->belongsTo(Category::class);
    }
}
