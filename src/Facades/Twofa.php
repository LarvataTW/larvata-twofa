<?php

namespace Larvata\Twofa\Facades;

use Illuminate\Support\Facades\Facade;

class Twofa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'twofa';
    }
}
