<?php

namespace SmartCms\Reviews\Events\Admin;

use SmartCms\Reviews\Admin\Pages\EditReviews;

class ProductSubNavigation
{
    public function __invoke(array &$pages)
    {
        $pages[] = EditReviews::class;
    }
}
