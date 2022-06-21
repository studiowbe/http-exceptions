<?php

namespace Studiow\Http\Exceptions\ClientError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class ExpectationFailedException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Expectation Failed', 417, $previous, $headers);
    }
}
