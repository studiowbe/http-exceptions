<?php

namespace Studiow\Http\Exceptions\ServerError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class VariantAlsoNegotiatesException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Variant Also Negotiates', 506, $previous, $headers);
    }
}
