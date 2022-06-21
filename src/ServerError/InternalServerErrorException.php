<?php

namespace Studiow\Http\Exceptions\ServerError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class InternalServerErrorException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Internal Server Error', 500, $previous, $headers);
    }
}
