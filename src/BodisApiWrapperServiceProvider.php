<?php

namespace JeffreyHosler\BodisApiWrapper;

use Illuminate\Support\ServiceProvider;

class BodisApiWrapperServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {	
        $this->publishes([
            __DIR__ . '/../config/bodis.php' => config_path('bodis.php'),
        ], 'config');
	}
}
