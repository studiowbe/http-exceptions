<?php

namespace Smartconnect\Http\Exceptions\Test;

class ClientErrorTest extends HttpExceptionTest
{
    public function test_it_creates_expected_responses()
    {
        $codes = [
            '400' => 'Bad Request',
            '401' => 'Unauthorized',
            '402' => 'Payment Required',
            '403' => 'Forbidden',
            '404' => 'Not Found',
            '405' => 'Method Not Allowed',
            '406' => 'Not Acceptable',
            '407' => 'Proxy Authentication Required',
            '408' => 'Request Timeout',
            '409' => 'Conflict',
            '410' => 'Gone',
            '411' => 'Length Required',
            '412' => 'Precondition Failed',
            '413' => 'Payload Too Large',
            '414' => 'URI Too Long',
            '415' => 'Unsupported Media Type',
            '416' => 'Range Not Satisfiable',
            '417' => 'Expectation Failed',
            '418' => "I'm a Teapot",
            '421' => 'Misdirected Request',
            '422' => 'Unprocessable Entity',
            '423' => 'Locked',
            '424' => 'Failed Dependency',
            '425' => 'Too Early',
            '426' => 'Upgrade Required',
            '428' => 'Precondition Required',
            '429' => 'Too Many Requests',
            '431' => 'Request Header Fields Too Large',
            '451' => 'Unavailable For Legal Reasons',
        ];

        foreach ($codes as $status => $message) {
            $fqn = '\\Studiow\\Http\\Exceptions\\ClientError\\' . $this->getClassName($message);

            $this->assertTrue(class_exists($fqn));
            $this->assertResponse(
                new $fqn, $status, $message
            );
        }
    }

    private function getClassName(string $message)
    {
        $name = preg_replace('#[^a-zA-Z]#', '', $message);

        return implode('', explode(' ', $name)) . 'Exception';
    }
}
