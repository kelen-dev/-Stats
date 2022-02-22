<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ActionLog extends Model
{
    private static $actions = [
        'users.transfer' => [
            'icon' => 'exchange-alt',
            'color' => 'info',
            'message' => 'admin.logs.users.transfer',
        ],
        'settings.updated' => [
            'icon' => 'sync',
            'color' => 'warning',
            'message' => 'admin.logs.settings.updated',
        ],
    ];

    protected $fillable = [
        'user_id', 'type', 'target_id', 'action', 'data',
    ];

    protected $casts = [
        'data' => 'array',
    ];

    protected static function booted()
    {
        self::registerLogModels([
            Ban::class,
            Post::class,
            Page::class,
            Role::class,
            Server::class,
            Image::class,
            User::class,
        ], 'admin.logs');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function target()
    {
        return $this->morphTo('target');
    }

    protected function getTargetTypeAttribute()
    {
        if ($this->target_id === null) {
            return null;
        }

        return $this->getActionFormat()['model'] ?? null;
    }

    public function getActionFormat()
    {
        return self::$actions[$this->action] ?? [
            'icon' => 'question',
            'color' => 'muted',
            'message' => $this->action,
        ];
    }

    public function getActionMessage()
    {
        $data = ['id' => $this->target_id] + ($this->data ?? []);

        return trans($this->getActionFormat()['message'], $data);
    }

    public static function log(string $action, Model $target = null, array $data = [])
    {
        if (Auth::guest()) {
            return null;
        }

        return self::create([
            'user_id' => Auth::id(),
            'action' => $action,
            'target_id' => $target ? $target->getKey() : null,
            'data' => $data ?: null,
        ]);
    }

    public static function registerLogModels(array $models, string $transNamespacePrefix)
    {
        foreach ($models as $item) {
            self::registerLogModel($item, $transNamespacePrefix);
        }
    }

    public static function registerLogModel(string $class, string $transPrefix)
    {
        $table = str_replace('_', '-', (new $class())->getTable());

        self::$actions[$table.'.created'] = [
            'icon' => 'plus',
            'color' => 'success',
            'message' => "{$transPrefix}.{$table}.created",
            'model' => $class,
        ];

        self::$actions[$table.'.updated'] = [
            'icon' => 'sync',
            'color' => 'warning',
            'message' => "{$transPrefix}.{$table}.updated",
            'model' => $class,
        ];

        self::$actions[$table.'.deleted'] = [
            'icon' => 'minus',
            'color' => 'danger',
            'message' => "{$transPrefix}.{$table}.deleted",
            'model' => $class,
        ];
    }

    public static function registerLogs($key, $value = null)
    {
        $keys = is_array($key) ? $key : [$key => $value];

        foreach ($keys as $key => $value) {
            self::$actions[$key] = $value;
        }
    }
}
