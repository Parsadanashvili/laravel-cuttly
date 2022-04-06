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
     * @var boolean
     */
    protected $userDomain = false;

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

    /**
     *
     * @return $this
     */
    public function useDomain(): self
    {
        $this->userDomain = true;

        return $this;
    }
}