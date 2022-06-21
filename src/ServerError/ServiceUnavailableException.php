<?php

namespace Studiow\Http\Exceptions\ServerError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class ServiceUnavailableException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Service Unavailable', 503, $previous, $headers);
    }
}
