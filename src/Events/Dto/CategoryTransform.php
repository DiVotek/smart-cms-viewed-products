<?php

namespace SmartCms\ViewedProducts\Events\Dto;

use SmartCms\Store\Repositories\Category\CategoryDto;
use SmartCms\ViewedProducts\Services\ViewedProductService;

class CategoryTransform
{
    public function __invoke(CategoryDto $dto): void
    {
        $dto->setExtraValue('viewed_products', ViewedProductService::getViewedProductsDTOs());
    }
}
