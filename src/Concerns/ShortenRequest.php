<?php

namespace Parsadanashvili\LaravelCuttly\Concerns;

use Parsadanashvili\LaravelCuttly\Facades\Cuttly;

abstract class ShortenRequest extends ShortenRequestAttributes
{
    /**
     * Process shorten via Cuttly facade
     *
     * @return mixed
     */
    public function process()
    {
        return Cuttly::processShorten($this);
    }
}