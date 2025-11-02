<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('isAdmin', function ($user) {
            return $user->isAdmin();
        });

        View::composer('layouts.home-navigation', function ($view) {
            $categories = Category::with(['destinations' => function ($query) {
                $query->active()->orderBy('name', 'asc');
            }])
                ->orderBy('name', 'asc')
                ->get();

            $destinations = Destination::active()->orderBy('name', 'asc')->get();

            $view->with([
                'destinations' => $destinations,
                'categories' => $categories,
            ]);
        });
    }
}
