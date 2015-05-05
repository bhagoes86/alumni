<?php namespace Alumni\Providers;

use Illuminate\Support\ServiceProvider;

class ImportServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('Alumni\Module\Import', function($app) {
			return $app;
		});
	}

}
