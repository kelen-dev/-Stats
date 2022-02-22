<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Arr;

trait Searchable
{
    public function scopeSearch(Builder $query, string $search, $columns = null)
    {
        if ($columns !== null) {
            $columns = Arr::wrap($columns);
        }

        return $query->where(function (Builder $query) use ($search, $columns) {
            foreach ($columns ?? $this->searchable as $column) {
                $query->orWhere($column, 'like', "%{$search}%");
            }

            if (is_numeric($search) || $this->getKeyType() !== 'int') {
                $query->orWhere($this->getKeyName(), $search);
            }
        });
    }
}
