<?php

namespace Studiow\Http\Exceptions\ServerError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class NotExtendedException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Not Extended', 510, $previous, $headers);
    }
}
