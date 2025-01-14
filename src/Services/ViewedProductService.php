<?php

namespace SmartCms\Viewed_products\Services;

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
        return ProductRepository::make()->findMultiple(Session::get('viewed_products', []));
    }

    public static function add($id)
    {
        $viewedProducts = Session::get('viewed_products', []);
        if (! in_array($id, $viewedProducts)) {
            $viewedProducts[] = $id;

            Session::put('viewed_products', $viewedProducts);
        }
    }
}
