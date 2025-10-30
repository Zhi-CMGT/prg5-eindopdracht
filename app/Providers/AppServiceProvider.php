<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Destination;
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
        View::composer('layouts.home-navigation', function ($view) {
            $categories = Category::with(['destinations' => function ($query) {
                $query->active();
            }])->get();

            $destinations = Destination::active()->get();

            $view->with([
                'destinations' => $destinations,
                'categories' => $categories,
            ]);
        });
    }
}
