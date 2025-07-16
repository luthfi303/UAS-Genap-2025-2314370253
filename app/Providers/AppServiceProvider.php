<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL; // Tambahkan ini
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
        // Tambahkan baris ini untuk memaksa semua URL dihasilkan dengan HTTPS
        if (env('APP_ENV') === 'production' || env('APP_ENV') === 'staging') { // Hanya jalankan di produksi/staging
             URL::forceScheme('https');
        }
    }
}