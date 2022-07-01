<?php

namespace Doshu\LaravelDatatable;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


class DatatableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'datatable');
        
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/datatable'),
        ], 'public');
        
        
    }
    
}
