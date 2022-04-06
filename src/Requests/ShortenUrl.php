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

    /**
     * @return array
     */
    public function toRequest(): array
    {
        return array_filter([
            'short' => $this->short,
            'userDomain' => (int)$this->userDomain,
            'name' => $this->name ?: null,
        ]);
    }
}