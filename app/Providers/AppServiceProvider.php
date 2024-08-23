<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Vendor\VendorRepository;
use App\Repositories\Vendor\VendorRepositoryInterface;

use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(
            VendorRepositoryInterface::class,
            VendorRepository::class
        );

        $this->app->singleton(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
