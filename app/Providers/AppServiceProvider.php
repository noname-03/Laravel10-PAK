<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Validators\NipRegisteredValidator;

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
        (new NipRegisteredValidator)->register();
    }
}