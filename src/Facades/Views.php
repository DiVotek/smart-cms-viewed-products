<?php

namespace SmartCms\Viewed_products\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmartCms\Views\Views
 */
class Views extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SmartCms\Viewed_products\Views::class;
    }
}
