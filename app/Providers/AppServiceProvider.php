<?php

namespace App\Providers;

use App\Card;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use Illuminate\Support\Facades\Auth;

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
        View::composer('index', function ($view) {
            $categories = Category::all();
            $view->with('categories',$categories);
        });

        View::composer('layouts.app', function ($view) {
            $cards = Card::where('user_id',Auth::id())->get();
            $count = count($cards);
            $view->with('count',$count);
        });
    }
}
