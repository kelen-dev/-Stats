<?php

namespace App\Models;

use App\Models\Traits\HasImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class PendingAttachment extends Model
{
    use HasImage;

    protected $fillable = [
        'pending_id', 'pending_type',
    ];

    protected $imageKey = 'file';

    protected function resolveImagePath(string $path = '')
    {
        $type = Relation::getMorphedModel($this->pending_type) ?? $this->pending_type;

        return (new $type())->getAttachmentsPath().'/'.$path;
    }
}
