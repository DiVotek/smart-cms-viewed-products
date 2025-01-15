<?php

namespace SmartCms\ViewedProducts\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmartCms\Views\Views
 */
class Views extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SmartCms\ViewedProducts\Views::class;
    }
}
