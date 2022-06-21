<?php

namespace Studiow\Http\Exceptions\ClientError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class PaymentRequiredException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Payment Required', 402, $previous, $headers);
    }
}
