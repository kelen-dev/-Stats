<?php

namespace App\Models;

use App\Models\Traits\Attachable;
use App\Models\Traits\Loggable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Attachable;
    use Loggable;

    protected $fillable = [
        'title', 'description', 'slug', 'content', 'is_enabled',
    ];

    protected $casts = [
        'is_enabled' => 'boolean',
    ];

    public function scopeEnabled(Builder $query)
    {
        return $query->where('is_enabled', true);
    }
}
