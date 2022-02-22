<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HasImage
{
    protected $imageDisk = 'public';

    protected static function bootHasImage()
    {
        static::deleted(function (Model $model) {
            if (method_exists($model, 'isForceDeleting') && ! $model->isForceDeleting()) {
                return;
            }

            $model->deleteImage();
        });
    }

    public function storeImage(UploadedFile $file, bool $save = false)
    {
        $this->deleteImage();

        $path = basename($file->storePublicly($this->resolveImagePath(), $this->imageDisk));

        $this->setAttribute($this->getImageKey(), $path);

        if ($save) {
            $this->save();
        }

        return $this->imageUrl();
    }

    public function deleteImage()
    {
        $key = $this->getImageKey();
        $image = $this->getAttribute($key);

        if ($image === null) {
            return false;
        }

        if (! $this->getImageDisk()->delete($this->resolveImagePath($image))) {
            return false;
        }

        $this->setAttribute($key, null);

        return true;
    }

    public function hasImage()
    {
        return $this->getAttribute($this->getImageKey()) !== null;
    }

    public function imageUrl()
    {
        $image = $this->getAttribute($this->getImageKey());

        if ($image === null) {
            return null;
        }

        return url($this->getImageDisk()->url($this->resolveImagePath($image)));
    }

    public function getImagePath()
    {
        $image = $this->getAttribute($this->getImageKey());

        if ($image === null) {
            return null;
        }

        return $this->resolveImagePath($image);
    }

    public function getImageDisk()
    {
        return Storage::disk($this->imageDisk);
    }

    protected function getImageKey()
    {
        return $this->imageKey ?? 'image';
    }

    protected function resolveImagePath(string $path = '')
    {
        return ($this->imagePath ?? Str::snake(Str::pluralStudly(class_basename($this)))).'/'.$path;
    }
}
