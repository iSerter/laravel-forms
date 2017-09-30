<?php

namespace Laravel\Forms;


use Illuminate\Support\ServiceProvider;

class FormsServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-forms');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/laravel-forms'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Form::class, function ($app) {
            return new Form($app);
        });
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [Form::class];
    }
}