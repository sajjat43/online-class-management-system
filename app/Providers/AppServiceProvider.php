<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\Models\Question;
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
        // $data = Question::where('class', $class)->get();
        // view::share('data', $data);
    }
}
