<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['recipes'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('recipeCount', function ($builder) {
            $builder->withCount('recipes');
        });

        Category::deleting(function ($category) {
            $recipe_ids = $category->recipes->pluck('id');
            Recipe::whereIn('id', $recipe_ids)->update(['category_id' => 1]);
        });

        foreach (static::getEventsToPurgeCache() as $event) {

            static::$event(function ($category) {
                \Cache::forget('categories');
            });
        }
    }

    protected static function getEventsToPurgeCache()
    {
        return ['created', 'deleted'];
    }


    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
