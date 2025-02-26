<?php

namespace SmartCms\ViewedProducts\Events;

use SmartCms\Store\Repositories\Category\CategoryEntityDto;
use SmartCms\ViewedProducts\Services\ViewedProductService;

class CategoryEntityTransform
{
   public function __invoke(CategoryEntityDto $dto): void
   {
      $dto->setExtraValue('viewed_products', ViewedProductService::getViewedProductsDTOs());
   }
}
