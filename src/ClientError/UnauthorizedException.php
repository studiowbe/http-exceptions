<?php

namespace Studiow\Http\Exceptions\ClientError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class UnauthorizedException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Unauthorized', 401, $previous, $headers);
    }
}
