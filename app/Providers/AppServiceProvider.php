<?php

namespace App\Providers;

use App\Models\AddClass;
use App\Models\Question;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        $class = AddClass::all();
        view::share('class', $class);
    }
}
