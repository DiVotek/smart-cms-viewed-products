<?php

namespace SmartCms\ViewedProducts\Events\Dto;

use SmartCms\Store\Repositories\Product\ProductDto;
use SmartCms\ViewedProducts\Services\ViewedProductService;

class ProductTransform
{
    public function __invoke(ProductDto $dto): void
    {
        $dto->setExtraValue('viewed_products', ViewedProductService::getViewedProductsDTOs());
    }
}
