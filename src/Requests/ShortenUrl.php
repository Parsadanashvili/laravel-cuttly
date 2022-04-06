<?php

namespace Parsadanashvili\LaravelCuttly\Requests;

use Parsadanashvili\LaravelCuttly\Concerns\ShortenRequest;

class ShortenUrl extends ShortenRequest
{
    /**
     * JustPay constructor.
     *
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->short($url);
    }
}