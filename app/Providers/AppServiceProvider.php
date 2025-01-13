<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        // Register layout as component
        Blade::component('layouts.app', 'app-layout');
        
        // Register other components
        Blade::component('components.header', 'header');
        Blade::component('components.footer', 'footer');
    }
}