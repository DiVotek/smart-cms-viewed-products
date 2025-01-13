<?php

namespace SmartCms\Reviews\Events\Dto;

use SmartCms\Reviews\Repositories\ProductReviewRepository;
use SmartCms\Store\Repositories\Product\ProductEntityDto;

class ProductEntityTransform
{
   public function __invoke(ProductEntityDto $dto): void
   {
      $dto->setExtraValue('rating', ProductReviewRepository::make()->getRating($dto->id));
      $dto->setExtraValue('reviews', ProductReviewRepository::make()->findByProductId($dto->id));
   }
}
