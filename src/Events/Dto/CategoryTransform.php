<?php

namespace SmartCms\Viewed_products\Events\Dto;

use SmartCms\Store\Repositories\Category\CategoryDto;
use SmartCms\Viewed_products\Services\ViewedProductService;

class CategoryTransform
{
    public function __invoke(CategoryDto $dto): void
    {
        $dto->setExtraValue('viewed_products', ViewedProductService::getViewedProductsDTOs());
    }
}
