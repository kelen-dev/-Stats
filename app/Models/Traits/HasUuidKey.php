<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use RuntimeException;

trait HasUuidKey
{
    public static function bootHasUuidKey()
    {
        static::creating(function (Model $model) {
            if ($model->getKey() === null) {
                $model->setAttribute($model->getKeyName(), Str::uuid());
            }
        });
    }

    public function getKeyType()
    {
        return 'string';
    }

    public function setKeyType($type)
    {
        throw new RuntimeException('Cannot change key type with UUID key.');
    }

    public function getIncrementing()
    {
        return false;
    }

    public function setIncrementing($value)
    {
        throw new RuntimeException('Cannot change incrementing with UUID key.');
    }
}
