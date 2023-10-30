<?php

namespace Noorfarooqy\NoorAuth;

use Illuminate\Support\ServiceProvider;

class NoorAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/../routes/api.php");


        $this->publishes([
            __DIR__ . '/../config/error_codes.php' => config_path('error_codes.php'),
        ], 'noorauth-errors');
    }
    public function register()
    {
    }
}
