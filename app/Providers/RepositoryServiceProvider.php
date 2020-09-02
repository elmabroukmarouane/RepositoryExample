<?php

namespace App\Providers;
use App\domain\IGenericRepository;
use App\domain\GenericRepository;
use App\service\IGenericService;
use App\service\GenericService;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            IGenericRepository::class, 
            GenericRepository::class
        );
        $this->app->bind(
            IGenericService::class, 
            GenericService::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
