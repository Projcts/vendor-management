<?php

namespace Alisons\VendorManagement;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class VendorManagementServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        Route::prefix('vendor-management')
            ->as('vendor-management.')
            ->middleware('api')
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
            });


        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
