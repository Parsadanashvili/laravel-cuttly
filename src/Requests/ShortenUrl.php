<?php

namespace Parsadanshvili\LaravelCuttly\Requests;

use Parsadanshvili\LaravelCuttly\Concerns\ShortenRequest;

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