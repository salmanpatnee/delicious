<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('commentsCount', function ($builder) {
            $builder->withCount('comments');
        });
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getIngredients()
    {
        return explode(',', $this->ingredients);
    }

    public function getThumbnail($name = 'thumbnail')
    {
        $default = $name == 'thumbnail' ? 'r1.jpg' : 'bg5.jpg';

        return isset($this->$name) ? asset('storage/' . $this->$name) : "/img/bg-img/{$default}";
    }
}
