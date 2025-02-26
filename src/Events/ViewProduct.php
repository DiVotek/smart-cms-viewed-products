<?php

namespace SmartCms\ViewedProducts\Events;

use SmartCms\Store\Models\Product;
use SmartCms\ViewedProducts\Services\ViewedProductService;

class ViewProduct
{
   public function __invoke(Product $entity): void
   {
      ViewedProductService::add($entity->id);
   }
}
