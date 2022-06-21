<?php

namespace Studiow\Http\Exceptions\ClientError;

use Studiow\Http\Exceptions\HttpException;
use Throwable;

class UpgradeRequiredException extends HttpException
{
    public function __construct(Throwable $previous = null, array $headers = [])
    {
        parent::__construct('Upgrade Required', 426, $previous, $headers);
    }
}
