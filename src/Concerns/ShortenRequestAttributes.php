<?php

namespace Parsadanashvili\LaravelCuttly\Concerns;

abstract class ShortenRequestAttributes extends Request
{
    /**
     * @var string
     */
    protected $short = "";

    /**
     * @var string
     */
    protected $name = "";

    /**
     * @param string $url
     *
     * @return $this
     */
    public function short(string $url): self
    {
        $this->short = $url;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function name(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}