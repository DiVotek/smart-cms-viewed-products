<?php

namespace SmartCms\ViewedProducts\Services;

use Illuminate\Support\Facades\Session;
use SmartCms\Store\Repositories\Product\ProductRepository;

class ViewedProductService
{
    public static function get(): array
    {
        return Session::get('viewed_products', []);
    }

    public static function getViewedProductsDTOs(): array
    {
        return ProductRepository::make()->findMultiple(self::get());
    }

    public static function add(int $id)
    {
        $viewedProducts = self::get();
        if (! in_array($id, $viewedProducts)) {
            $viewedProducts[] = $id;

            Session::put('viewed_products', $viewedProducts);
        }
    }
}
