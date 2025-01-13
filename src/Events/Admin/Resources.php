<?php

namespace SmartCms\Reviews\Events\Admin;

use SmartCms\Reviews\Admin\Resources\ProductReviewResource;

class Resources
{
   public function __invoke(array &$items)
   {
      $items =  array_merge([
         ProductReviewResource::class,
      ], $items);
   }
}
