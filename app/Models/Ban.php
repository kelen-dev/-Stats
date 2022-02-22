<?php

namespace App\Models;

use App\Models\Traits\HasUser;
use App\Models\Traits\Loggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Ban extends Model
{
    use HasUser;
    use Loggable;
    use SoftDeletes;

    protected const DELETED_AT = 'removed_at';

    protected static $logEvents = [
        'created', 'deleted',
    ];

    protected $fillable = [
        'user_id', 'reason',
    ];

    protected $userKey = 'author_id';

    protected static function booted()
    {
        foreach (['created', 'deleted'] as $event) {
            static::registerModelEvent($event, function (self $ban) {
                $ban->user->flushBanCache();
            });
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function remover()
    {
        return $this->belongsTo(User::class, 'remover_id');
    }

    public function removeBan(User $remover = null)
    {
        $this->remover()->associate($remover ?? Auth::user());
        $this->save();

        $this->delete();
    }
}
