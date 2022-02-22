<?php

namespace App\Models;

use App\Models\Traits\HasUuidKey;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\DatabaseNotificationCollection;

class Notification extends Model
{
    use HasUuidKey;

    protected $fillable = [
        'author_id', 'level', 'content', 'link', 'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
    ];

    protected $icons = [
        'info' => 'bell',
        'warning' => 'exclamation',
        'danger' => 'exclamation-triangle',
        'success' => 'check',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function icon()
    {
        return $this->icons[$this->level] ?? 'bell';
    }

    public function markAsRead()
    {
        if ($this->read_at === null) {
            $this->update(['read_at' => now()]);
        }
    }

    public function markAsUnread()
    {
        if ($this->read_at !== null) {
            $this->update((['read_at' => null]));
        }
    }

    public function read()
    {
        return $this->read_at !== null;
    }

    public function unread()
    {
        return $this->read_at === null;
    }

    public function scopeRead(Builder $query)
    {
        return $query->whereNotNull('read_at');
    }

    public function scopeUnread(Builder $query)
    {
        return $query->whereNull('read_at');
    }

    public function newCollection(array $models = [])
    {
        return new DatabaseNotificationCollection($models);
    }
}
