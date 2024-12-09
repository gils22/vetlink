<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register any application services here.
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register Blade components.
        Blade::component('components.WhatsAppButton', 'whatsapp-button');
    }
}
