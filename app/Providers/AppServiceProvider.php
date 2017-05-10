<?php

namespace App\Providers;

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
    	if ($this->app->environment() == 'local') {
    		// Lumen Generator
    		$this->app->register('Wn\Generators\CommandsServiceProvider');
    	}
    }
}
