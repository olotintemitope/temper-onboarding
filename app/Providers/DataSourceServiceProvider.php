<?php

namespace App\Providers;

use App\Contract\DataSourceInterface;
use Illuminate\Support\ServiceProvider;
use App\Repositories\FileReaderRepository;

class DataSourceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DataSourceInterface::class, FileReaderRepository::class);
    }
}
