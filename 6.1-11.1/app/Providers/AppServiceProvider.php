<?php

namespace App\Providers;

use App\Repositories\CustomerRepository;
use App\Repositories\Interfaces\CustomerRepositoryInterface;
use App\Services\CustomerService;
use App\Services\Interfaces\CustomerServiceInterface;
use Illuminate\Pagination\Paginator;
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
        $this->app->singleton(
            CustomerRepositoryInterface::class,
            CustomerRepository::class,
        );

        $this->app->singleton(
            CustomerServiceInterface::class,
            CustomerService::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
