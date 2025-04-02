<?php

namespace SmartCms\ViewedProducts;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use SmartCms\Store\Resources\Category\CategoryEntityResource;
use SmartCms\Store\Resources\Product\ProductEntityResource;
use SmartCms\ViewedProducts\Events\EntityTransform;
use SmartCms\ViewedProducts\Events\ViewProduct;

class ViewedProductsServiceProvider extends ServiceProvider
{
    public function register() {}

    public function boot()
    {
        Event::listen('cms.product.view', ViewProduct::class);
        ProductEntityResource::registerHook('transform.data', EntityTransform::class);
        CategoryEntityResource::registerHook('transform.data', EntityTransform::class);
    }
}
