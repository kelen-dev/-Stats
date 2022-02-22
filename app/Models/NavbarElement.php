<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Str;

class NavbarElement extends Model
{
    public const CACHE_KEY = 'navbar';

    private const TYPES = [
        'home', 'link', 'page', 'post', 'portfolio', 'dropdown',
    ];

    public $timestamps = false;

    protected $fillable = [
        'name', 'value', 'position', 'type', 'parent_id', 'new_tab',
    ];

    protected $casts = [
        'new_tab' => 'boolean',
    ];

    protected static function booted()
    {
        foreach (['created', 'updated', 'deleted'] as $event) {
            static::registerModelEvent($event, function () {
                static::clearCache();
            });
        }
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function elements()
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('position');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function getLink()
    {
        switch ($this->type) {
            case 'home':
                return route('home');
            case 'link':
                return $this->value;
            case 'post':
                return route('portfolio.show', $this->value);
            case 'portfolio':
                return route('portfolio.index');
            default:
                return '#';
        }
    }

    public function isCurrent()
    {
        $request = request();

        switch ($this->type) {
            case 'home':
                return $request->routeIs('home');
            case 'link':
                return $request->is($this->value);
            case 'page':
                return $request->routeIs('pages.show') && $request->route('page.slug') === $this->value;
            case 'post':
                return $request->routeIs('portfolio.show') && $request->route('post.slug') === $this->value;
            case 'portfolio':
                return $request->routeIs('portfolio.*');
            case 'dropdown':
                return $this->elements
                    ->contains(function (self $element) {
                        return ! $element->isDropdown() && $element->isCurrent();
                    });
            default:
                return false;
        }
    }

    public function getNameAttribute(string $value)
    {
        return new HtmlString($value);
    }

    public function getTypeValue(string $type)
    {
        return $this->type === $type ? $this->value : '';
    }

    public function isDropdown()
    {
        return $this->type === 'dropdown';
    }

    public function isRestricted()
    {
        return ! $this->roles->isEmpty();
    }

    public function hasParent()
    {
        return $this->parent_id !== null;
    }

    public function scopeParent(Builder $query)
    {
        return $query->whereNull('parent_id');
    }

    public static function types()
    {
        return self::TYPES;
    }

    public static function clearCache()
    {
        Cache::forget(static::CACHE_KEY);
    }

    public function hasPermission()
    {
        if (! $this->isRestricted()) {
            return true;
        }

        if (Auth::guest()) {
            return false;
        }

        $user = Auth::user();

        return $user->isAdmin() || $this->roles->contains($user->role);
    }
}
