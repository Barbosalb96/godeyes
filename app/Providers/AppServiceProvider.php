<?php

namespace App\Providers;

use App\Repositories\AbstractRepository;
use App\Repositories\ContactRepository;
use App\Repositories\Interfaces\ContactInterface;
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
        $this->app->bind(ContactInterface::class, ContactRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}
