<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Recipe extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters)
    {
        if (isset($filters['search'])) {

            $search = $filters['search'];

            $query->where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            });
        }

        if (isset($filters['category'])) {

            $category = $filters['category'];
            $query->whereHas('category', function (Builder $query) use ($category) {
                $query->where('slug', '=', $category);
            });
        }
    }
}
