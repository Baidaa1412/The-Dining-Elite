<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Resturant;
use App\Models\Reservation;

use App\Models\Profile;
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
    View::composer('home.navbar', function ($view) {
        $resturants  = Resturant::all();
        $view->with('resturants', $resturants );
    });

    View::composer('home.navbar', function ($view) {
        $categories  = Category::all();
        $view->with('categories', $categories );
    });
    View::composer('home.footer', function ($view) {
        $categories  = Category::all();
        $view->with('categories', $categories );
    });
    View::composer('home.reservation.resdetail', function ($view) {
        $resturant  = Resturant::all();
        $view->with('resturant', $resturant );
    });
    View::composer('user.index', function ($view) {
        $reservations = Reservation::all();
        $view->with('reservations', $reservations );
    });

}

}
