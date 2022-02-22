<?php

namespace App\Models\Traits;

use App\Models\ActionLog;
use Illuminate\Database\Eloquent\Model;

trait Loggable
{
    protected static function bootLoggable()
    {
        $events = static::$logEvents ?? ['created', 'updated', 'deleted'];

        foreach ($events as $event) {
            static::$event(function (Model $model) use ($event) {
                $action = str_replace('_', '-', $model->getTable()).'.'.$event;

                ActionLog::log($action, $model, $model->getLogData($event));
            });
        }
    }

    protected function getLogData(string $event)
    {
        return [];
    }
}
