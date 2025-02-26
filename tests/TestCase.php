<?php

namespace SmartCms\ViewedProducts\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use SmartCms\ViewedProducts\ViewedProductsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../vendor/smart-cms/core/database/migrations');
        $this->loadMigrationsFrom(__DIR__ . '/../vendor/smart-cms/store/database/migrations');

        Factory::guessFactoryNamesUsing(
            fn(string $modelName) => 'SmartCms\\ViewedProducts\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            ViewedProductsServiceProvider::class,
            \SmartCms\Store\StoreServiceProvider::class,
            \SmartCms\Core\SmartCmsPanelManager::class,
            \SmartCms\Core\SmartCmsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
        $app->singleton('_settings', function () {
            return new \SmartCms\Core\Services\Singletone\Settings;
        });
    }
}
