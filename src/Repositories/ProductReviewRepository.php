<?php

namespace SmartCms\Reviews\Repositories;

use SmartCms\Reviews\Dto\ProductReviewDto;
use SmartCms\Reviews\Models\ProductReview;

class ProductReviewRepository
{
    public static function make(): self
    {
        return new self;
    }

    public function findByProductId(int $productId): array
    {
        return ProductReview::query()
            ->where('is_approved', true)
            ->where('product_id', $productId)->get()->map(function (ProductReview $review) {
                return ProductReviewDto::factory($review->name, $review->email, $review->comment, $review->rating, $review->image, $review->created_at)->get();
            })->toArray();
    }

    public function get(): array
    {
        return ProductReview::query()
            ->where('is_approved', true)
            ->get()->map(function (ProductReview $review) {
                return ProductReviewDto::factory($review->name, $review->email, $review->comment, $review->rating, $review->image, $review->created_at)->get();
            })->toArray();
    }

    public function getRating(int $productId): float
    {
        return ProductReview::query()->where('is_approved', true)
            ->where('product_id', $productId)->avg('rating') ?? 0;
    }
}
