<?php

namespace SmartCms\Reviews\Events\Admin;

use SmartCms\Reviews\Admin\Pages\EditReviews;

class ProductPages
{
    public function __invoke(array &$pages)
    {
        $pages = array_merge([
            'reviews' => EditReviews::route('/{record}/reviews'),
        ], $pages);
    }
}
