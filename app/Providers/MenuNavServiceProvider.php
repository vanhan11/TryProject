<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classes\MenuNav\MenuNav;

class MenuNavServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind( 'Menu', function() {
            return new MenuNav;
        });
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
