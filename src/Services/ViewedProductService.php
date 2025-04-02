<?php

namespace SmartCms\ViewedProducts\Services;

use Illuminate\Support\Facades\Session;
use SmartCms\Store\Models\Product;
use SmartCms\Store\Resources\Product\ProductResource;

class ViewedProductService
{
    public static $sessionKey = 'smart_cms.viewed_products';

    public static function get(): array
    {
        return Session::get(self::$sessionKey, []);
    }

    public static function getViewedProducts(): array
    {
        return Product::query()->whereIn('id', self::get())->get()->map(function ($el) {
            return ProductResource::make($el)->get();
        })->toArray();
    }

    public static function add(int $id)
    {
        $viewedProducts = self::get();
        if (! in_array($id, $viewedProducts)) {
            $viewedProducts[] = $id;

            Session::put(self::$sessionKey, $viewedProducts);
        }
    }
}
