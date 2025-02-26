<?php

namespace SmartCms\ViewedProducts\Events;

use SmartCms\Store\Repositories\Product\ProductEntityDto;
use SmartCms\ViewedProducts\Services\ViewedProductService;

class ProductEntityTransform
{
    public function __invoke(ProductEntityDto $dto): void
    {
        $dto->setExtraValue('viewed_products', ViewedProductService::getViewedProductsDTOs());
    }
}
