<?php

namespace Smartconnect\Http\Exceptions\Test;

class ServerErrorTest extends HttpExceptionTest
{
    public function test_it_creates_expected_responses()
    {
        $codes = [
            500 => 'Internal Server Error',
            501 => 'Not Implemented',
            502 => 'Bad Gateway',
            503 => 'Service Unavailable',
            504 => 'Gateway Timeout',
            505 => 'HTTP Version Not Supported',
            506 => 'Variant Also Negotiates',
            507 => 'Insufficient Storage',
            508 => 'Loop Detected',
            510 => 'Not Extended',
            511 => 'Network Authentication Required',
        ];

        foreach ($codes as $status => $message) {
            $fqn = '\\Studiow\\Http\\Exceptions\\ServerError\\'.$this->getClassName($message);

            $this->assertTrue(class_exists($fqn));
            $this->assertResponse(
                new $fqn, $status, $message
            );
        }
    }

    private function getClassName(string $message)
    {
        $name = preg_replace('#[^a-zA-Z]#', '', $message);

        return implode('', explode(' ', $name)).'Exception';
    }
}
