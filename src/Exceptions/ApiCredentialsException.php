<?php

namespace Parsadanshvili\LaravelCuttly\Exceptions;

use Exception;

class ApiCredentialsException extends Exception
{
    /**
     * @var string
     */
    protected $message = 'Please specify Cuttly API credentials.';
}