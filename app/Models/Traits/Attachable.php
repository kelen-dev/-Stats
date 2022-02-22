<?php

namespace App\Models\Traits;

use App\Models\Attachment;
use App\Models\PendingAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait Attachable
{
    public static function bootAttachable()
    {
        static::updated(function (Model $model) {
            $content = $model->getAttribute($model->getAttachmentsKey());

            if ($model->getOriginal($model->getAttachmentsKey()) === $content) {
                return;
            }

            $attachments = $model->attachments()->withTrashed()->get();

            foreach ($attachments as $attachment) {
                if (Str::contains($content, $attachment->file)) {
                    if ($attachment->trashed()) {
                        $attachment->restore();
                    }
                } elseif (! $attachment->trashed()) {
                    $attachment->delete();
                }
            }
        });
    }

    public static function storePendingAttachment(string $pendingId, UploadedFile $file)
    {
        $attachment = new PendingAttachment([
            'pending_id' => $pendingId,
            'pending_type' => (new self())->getAttachmentsType(),
        ]);

        return $attachment->storeImage($file, true);
    }

    public function persistPendingAttachments(?string $pendingId)
    {
        if ($pendingId === null) {
            return;
        }

        $attachments = PendingAttachment::where('pending_id', $pendingId)
            ->where('pending_type', $this->getAttachmentsType())
            ->get();

        $content = $this->getAttribute($this->getAttachmentsKey());

        foreach ($attachments as $attachment) {
            if (Str::contains($content, $attachment->file)) {
                $this->attachments()
                    ->make()
                    ->forceFill(['file' => $attachment->file])
                    ->save();

                $attachment->forceFill(['file' => null]);
            }

            $attachment->delete();
        }
    }

    public function storeAttachment(UploadedFile $file)
    {
        $attachment = $this->attachments()->make();

        return $attachment->storeImage($file, true);
    }

    public function attachments()
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    public function getAttachmentsKey()
    {
        return 'content';
    }

    public function getAttachmentsType()
    {
        return (new self())->getMorphClass();
    }

    public function getAttachmentsPath()
    {
        return $this->getTable().'/attachments';
    }
}
