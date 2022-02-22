<?php

namespace App\Models;

use App\Models\Traits\Loggable;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use Loggable;

    protected $fillable = [
        'name', 'file', 'type',
    ];

    public function getSlug()
    {
        return pathinfo($this->file, PATHINFO_FILENAME);
    }

    public function getExtension()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    public function url()
    {
        return image_url($this->file);
    }
}
