<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ProductJsonFileService;

class ProductJsonFileServiceProvider extends ServiceProvider
{

    protected $defer = true;

    protected $dbFile;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $filePath = database_path();

        $this->dbFile = $filePath . DIRECTORY_SEPARATOR . 'products.json';

        if (!file_exists($this->dbFile)) {
            $result = file_put_contents($this->dbFile, '[]');
            if (!$result) {
                throw new \Exception("Unable to write to products file");
            }
        } elseif (!is_writable($this->dbFile)) {
            throw new \Exception("Unable to write to products file");
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ProductJsonFileService::class, function ($app) {
            $service = new ProductJsonFileService();
            $service->setDbfile($this->dbFile);
            return $service;
        });
    }

    public function provides()
    {
        return [ProductJsonFileService::class];
    }
}
