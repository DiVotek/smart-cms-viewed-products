<?php

namespace SmartCms\Viewed_products\Events\Dto;

use SmartCms\Store\Models\Product;
use SmartCms\Viewed_products\Services\ViewedProductService;

class ProductEntityTransform
{
    public function __invoke(Product $entity): void
    {
        ViewedProductService::add($entity->id);
    }
}
