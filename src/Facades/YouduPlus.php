<?php

namespace Youdu\YouduPlus\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Youdu\YouduPlus\YouduPlus
 */
class YouduPlus extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Youdu\YouduPlus\YouduPlus::class;
    }
}
