<?php

namespace Furqat\CodeGenerator;

use Illuminate\Support\ServiceProvider;

class CodeGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/code-generator.php' => config_path('code-generator.php'),
            __DIR__ . '/public/assets' =>  public_path('vendor/code-generator')
        ]);
        $this->loadViewsFrom(__DIR__.'/resources/views', 'generator');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }
}
