<?php

namespace SmartCms\ViewedProducts\Events\Dto;

use SmartCms\Store\Models\Product;
use SmartCms\ViewedProducts\Services\ViewedProductService;

class ProductEntityTransform
{
    public function __invoke(Product $entity): void
    {
        ViewedProductService::add($entity->id);
    }
}
