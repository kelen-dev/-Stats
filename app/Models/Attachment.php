<?php

namespace App\Models;

use App\Models\Traits\HasImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    use HasImage;
    use SoftDeletes;

    protected $imageKey = 'file';

    public function attachable()
    {
        return $this->morphTo('attachable');
    }

    protected function resolveImagePath(string $path = '')
    {
        return $this->attachable->getAttachmentsPath().'/'.$path;
    }
}
