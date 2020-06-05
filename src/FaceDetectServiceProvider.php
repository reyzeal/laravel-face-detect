<?php namespace Reyzeal\LaravelFaceDetect;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class FaceDetectServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('FaceDetect', '\Reyzeal\LaravelFaceDetect\FaceDetect');
        
	}


    public function boot(){
		$this->publishes([
				__DIR__.'/config/config.php' => base_path('config/facedetect.php'),
		]);
    }

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [

        ];
	}

}
