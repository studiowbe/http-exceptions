<?php

declare(strict_types=1);

namespace Studiow\Http\Exceptions;

use Exception;
use Psr\Http\Message\ResponseInterface;
use Throwable;

abstract class HttpException extends Exception implements HttpExceptionInterface
{
    /**
     * @var array
     */
    private $headers;

    public function __construct($message = '', $code = 0, Throwable $previous = null, array $headers = [])
    {
        parent::__construct($message, $code, $previous);
        $this->headers = $headers;
    }

    public function getHeaders(): array
    {
        return $this->getHeaders();
    }

    public function toJsonResponse(ResponseInterface $response):ResponseInterface
    {
        $response = $response->withAddedHeader('content-type', 'application/json');

        foreach ($this->headers as $name=>$value) {
            $response = $response->withAddedHeader($name, $value);
        }

        if ($response->getBody()->isWritable()) {
            $response->getBody()->write(
                json_encode($this)
            );
        }

        return $response->withStatus($this->getCode(), $this->getMessage());
    }

    public function jsonSerialize():array
    {
        return [
            'status'=>$this->getCode(),
            'message'=>$this->getMessage(),
        ];
    }
}
