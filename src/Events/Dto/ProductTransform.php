<?php

namespace SmartCms\Reviews\Events\Dto;

use SmartCms\Reviews\Repositories\ProductReviewRepository;
use SmartCms\Store\Repositories\Product\ProductDto;

class ProductTransform
{
   public function __invoke(ProductDto $dto): void
   {
      $dto->setExtraValue('rating', ProductReviewRepository::make()->getRating($dto->id));
   }
}
