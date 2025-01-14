<?php

namespace SmartCms\Viewed_products\Events\Dto;

use SmartCms\Store\Repositories\Product\ProductDto;
use SmartCms\Viewed_products\Services\ViewedProductService;

class ProductTransform
{
    public function __invoke(ProductDto $dto): void
    {
        $dto->setExtraValue('viewed_products', ViewedProductService::getViewedProductsDTOs());
    }
}
