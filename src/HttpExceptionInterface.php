<?php

namespace Studiow\Http\Exceptions;

use Psr\Http\Message\ResponseInterface;

interface HttpExceptionInterface extends \JsonSerializable
{
    public function getHeaders():array;

    public function toJsonResponse(ResponseInterface $response):ResponseInterface;
}
