<?php

namespace Studiow\Http\Exceptions\ClientError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class TooManyRequestsException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Too Many Requests', 429, $previous, $headers);
    }
}
