<?php

namespace App\Providers;

use App\Http\Controllers\CsvUserController;
use App\Http\Controllers\JsonUserController;
use App\Interfaces\LoadSource;
use App\Services\CsvUserService;
use App\Services\JsonUserService;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->when(JsonUserController::class)
            ->needs(LoadSource::class)
            ->give(JsonUserService::class);

        $this->app->when(CsvUserController::class)
            ->needs(LoadSource::class)
            ->give(CsvUserService::class);
    }
}
