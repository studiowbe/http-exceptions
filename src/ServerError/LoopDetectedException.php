<?php

namespace Studiow\Http\Exceptions\ServerError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class LoopDetectedException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Loop Detected', 508, $previous, $headers);
    }
}
