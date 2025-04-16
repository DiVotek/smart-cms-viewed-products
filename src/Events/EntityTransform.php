<?php

namespace SmartCms\ViewedProducts\Events;

use SmartCms\ViewedProducts\Services\ViewedProductService;

class EntityTransform
{
    public function __invoke(&$dto): void
    {
        $dto['viewed_products'] = ViewedProductService::getViewedProducts();
    }
}
