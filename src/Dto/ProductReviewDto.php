<?php

namespace SmartCms\Reviews\Dto;

use DateTime;
use SmartCms\Core\Repositories\DtoInterface;
use SmartCms\Core\Traits\Dto\AsDto;

class ProductReviewDto implements DtoInterface
{
   use AsDto;

   public function __construct(public string $name, public ?string $email, public string $review, public int $rating, public ?string $image, public DateTime $createdAt) {}

   public function toArray(): array
   {
      return [
         'name' => $this->name,
         'email' => $this->email ?? '',
         'review' => $this->review,
         'rating' => $this->rating,
         'image' => $this->image ?? '',
         'created_at' => $this->transformDate($this->createdAt),
      ];
   }
}
