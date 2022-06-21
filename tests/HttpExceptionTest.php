<?php

namespace Smartconnect\Http\Exceptions\Test;

use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Studiow\Http\Exceptions\HttpException;

abstract class HttpExceptionTest extends TestCase
{
    public function assertResponse(HttpException $exception, int $expectedStatus, string $expectedMessage)
    {
        $expectedHeaders = [
            'content-type'=>['application/json'],
        ];

        $expectedBody = json_encode([
            'status'=>$expectedStatus,
            'message'=>$expectedMessage,
        ]);
        $response = $exception->toJsonResponse(new Response());
        $this->assertEquals($expectedStatus, $response->getStatusCode());
        $this->assertEquals($expectedMessage, $response->getReasonPhrase());
        $this->assertEquals($expectedHeaders, $response->getHeaders());
        $response->getBody()->rewind();
        $this->assertEquals($expectedBody, $response->getBody()->getContents());
    }
}
