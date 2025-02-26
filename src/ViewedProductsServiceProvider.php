<?php

namespace SmartCms\ViewedProducts;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use SmartCms\ViewedProducts\Events\CategoryEntityTransform;
use SmartCms\ViewedProducts\Events\ProductEntityTransform;
use SmartCms\ViewedProducts\Events\ViewProduct;

class ViewedProductsServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot()
    {
        Event::listen('cms.product.view', ViewProduct::class);
        Event::listen('cms.product-entity.transform', ProductEntityTransform::class);
        Event::listen('cms.category-entity.transform', CategoryEntityTransform::class);
    }
}
