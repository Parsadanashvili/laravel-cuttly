<?php

namespace Parsadanshvili\LaravelCuttly\Concerns;

use Parsadanshvili\LaravelCuttly\Facades\Cuttly;

abstract class Request {

    /**
     * @return array
     */
    public function toRequest(): array
    {
        return [];
    }

    /**
     * Return new instance
     *
     * @return static
     */
    public static function request(): self
    {
        return new static(...func_get_args());
    }

    /**
     * Process request via Cuttly facade
     *
     * @return mixed
     */
    public function process()
    {
        return Cuttly::process($this);
    }
}