<?php

namespace SmartCms\Viewed_products;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use SmartCms\Viewed_products\Events\Dto\CategoryEntityTransform;
use SmartCms\Viewed_products\Events\Dto\ProductEntityTransform;

class ViewsServiceProvider extends ServiceProvider
{
    public function register()
    {
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadTranslationsFrom(__DIR__.'/../lang', 'reviews');
        // Event::listen('cms.admin.navigation.resources', Resources::class);
        // Event::listen('cms.admin.product.pages', ProductPages::class);
        // Event::listen('cms.admin.product.sub_navigation', ProductSubNavigation::class);
    }

    public function boot()
    {
        Event::listen('cms.product.view', ProductEntityTransform::class);
    }
}
