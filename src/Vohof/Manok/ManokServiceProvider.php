<?php namespace Vohof\Manok;

use Illuminate\Support\ServiceProvider;

class ManokServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('vohof/manok');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->after(function ($req, $res)
        {
            $config = $this->app['config']->get('manok::security');

            foreach ($config as $key => $value)
            {
                if ($value)
                {
                    $res->headers->add(array($key => $value));
                }
            }
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
