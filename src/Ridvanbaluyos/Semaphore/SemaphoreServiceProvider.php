<?php namespace Ridvanbaluyos\Semaphore;

use Illuminate\Support\ServiceProvider;

class SemaphoreServiceProvider extends ServiceProvider {

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
		$this->package('ridvanbaluyos/semaphore');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->app['semaphore'] = $this->app->share(function($app){
			return new Semaphore;
		});

		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Semaphore', 'Ridvanbaluyos\Semaphore\Facades\Semaphore');
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
