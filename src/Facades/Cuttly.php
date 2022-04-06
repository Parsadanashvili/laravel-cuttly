<?php

namespace Parsadanshvili\LaravelCuttly\Facades;

use Illuminate\Support\Facades\Facade;

class Cuttly extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Parsadanshvili\LaravelCuttly\Cuttly::class;
    }
}
