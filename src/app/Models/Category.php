<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class);
    }
}
