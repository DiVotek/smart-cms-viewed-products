<?php

namespace SmartCms\Reviews\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SmartCms\Reviews\Reviews
 */
class Reviews extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \SmartCms\Reviews\Reviews::class;
    }
}
