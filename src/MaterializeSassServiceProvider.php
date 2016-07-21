<?php

namespace Qntm\LaravelMaterializeSass;

use Illuminate\Support\ServiceProvider;

class MaterializeSassServiceProvider extends ServiceProvider
{

    protected $defer = true;

    public function register()
    {
        $this->publishes([
            __DIR__ . '/../assets/js/bin' => public_path('materialize/js'),
        ], 'materializesass');
        $this->publishes([
            __DIR__ . '/../assets/fonts' => public_path('materialize/fonts')
        ], 'materializesass');
        $this->publishes([
            __DIR__ . '/../assets/sass' => resource_path('assets/sass/materialize')
        ], 'materializesass');
        $this->registerMaterializeSassBuilder();
        $this->app->alias('materialize-sass', 'qntm\LaravelMaterializeSass\MaterializeSassBuilder');
    }

    protected function registerMaterializeCSSBuilder()
    {
        $this->app->singleton('materialize-sass', function ($app) {
            return new MaterializeSassBuilder($app['url']);
        });
    }

    public function provides()
    {
        return array('materialize-sass');
    }

}

?>