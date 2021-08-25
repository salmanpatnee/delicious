<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = \Cache::rememberForever('categories', function () {
            return  Category::all();
        });

        View::share('categories',  $categories);

        Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return $user->username === 'admin';
        });
    }
}
