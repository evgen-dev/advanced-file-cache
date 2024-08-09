<?php

namespace EvgenDev\FileCache;

use Illuminate\Support\ServiceProvider;

class FileCacheServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton('filecache', function ($app) {
            return $this->app->make(Manager::class, []);
        });
    }

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
