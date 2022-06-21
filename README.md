# Http Exceptions
A helper package for throwing HTTP Exceptions (4xx - 5xx)


## Installation
The easiest way to install this package is using composer:
``` bash
composer require studiow/http-exceptions
```

## Throwing exceptions
The package provides dedicated Exceptions for each of the 4xx and 5xx error status codes:

### Client Error (4xx)
| Status Code | Reason Phrase                   | Class name                                                                |
|-------------|---------------------------------|---------------------------------------------------------------------------|
| 400 | Bad Request                     | \Studiow\Http\Exceptions\ClientError\BadRequestException                  |
| 401 | Unauthorized                    | \Studiow\Http\Exceptions\ClientError\UnauthorizedException                |
| 402 | Payment Required                | \Studiow\Http\Exceptions\ClientError\PaymentRequiredException             |
| 403 | Forbidden                       | \Studiow\Http\Exceptions\ClientError\ForbiddenException                   |
| 404 | Not Found                       | \Studiow\Http\Exceptions\ClientError\NotFoundException                    |
| 405 | Method Not Allowed              | \Studiow\Http\Exceptions\ClientError\MethodNotAllowedException            |
| 406 | Not Acceptable                  | \Studiow\Http\Exceptions\ClientError\NotAcceptableException               |
| 407 | Proxy Authentication Required   | \Studiow\Http\Exceptions\ClientError\ProxyAuthenticationRequiredException |
| 408 | Request Timeout                 | \Studiow\Http\Exceptions\ClientError\RequestTimeoutException              |
| 409 | Conflict                        | \Studiow\Http\Exceptions\ClientError\ConflictException                    |
| 410 | Gone                            | \Studiow\Http\Exceptions\ClientError\GoneException                        |
| 411 | Length Required                 | \Studiow\Http\Exceptions\ClientError\LengthRequiredException              |
| 412 | Precondition Failed             | \Studiow\Http\Exceptions\ClientError\PreconditionFailedException          |
| 413 | Payload Too Large               | \Studiow\Http\Exceptions\ClientError\PayloadTooLargeException             |
| 414 | URI Too Long                    | \Studiow\Http\Exceptions\ClientError\URITooLongException                  |
| 415 | Unsupported Media Type          | \Studiow\Http\Exceptions\ClientError\UnsupportedMediaTypeException        |
| 416 | Range Not Satisfiable           | \Studiow\Http\Exceptions\ClientError\RangeNotSatisfiableException         |
| 417 | Expectation Failed              | \Studiow\Http\Exceptions\ClientError\ExpectationFailedException           |
| 418 | I'm a Teapot                    | \Studiow\Http\Exceptions\ClientError\ImaTeapotException                   |
| 421 | Misdirected Request             | \Studiow\Http\Exceptions\ClientError\MisdirectedRequestException          |
| 422 | Unprocessable Entity            | \Studiow\Http\Exceptions\ClientError\UnprocessableEntityException         |
| 423 | Locked                          | \Studiow\Http\Exceptions\ClientError\LockedException                      |
| 424 | Failed Dependency               | \Studiow\Http\Exceptions\ClientError\FailedDependencyException            |
| 425 | Too Early                       | \Studiow\Http\Exceptions\ClientError\TooEarlyException                    |
| 426 | Upgrade Required                | \Studiow\Http\Exceptions\ClientError\UpgradeRequiredException             |
| 428 | Precondition Required           | \Studiow\Http\Exceptions\ClientError\PreconditionRequiredException        |
| 429 | Too Many Requests               | \Studiow\Http\Exceptions\ClientError\TooManyRequestsException             |
| 431 | Request Header Fields Too Large | \Studiow\Http\Exceptions\ClientError\RequestHeaderFieldsTooLargeException |
| 451 | Unavailable For Legal Reasons   | \Studiow\Http\Exceptions\ClientError\UnavailableForLegalReasonsException  |

### Server Error (5xx)

| Status Code | Reason Phrase                   | Class name   |
|-------------|---------------------------------|--------------------------------------------------------------------------|
| 501 | Not Implemented | \Studiow\Http\Exceptions\ServerError\NotImplementedException |
| 502 | Bad Gateway | \Studiow\Http\Exceptions\ServerError\BadGatewayException |
| 503 | Service Unavailable | \Studiow\Http\Exceptions\ServerError\ServiceUnavailableException |
| 504 | Gateway Timeout | \Studiow\Http\Exceptions\ServerError\GatewayTimeoutException |
| 505 | HTTP Version Not Supported | \Studiow\Http\Exceptions\ServerError\HTTPVersionNotSupportedException |
| 506 | Variant Also Negotiates | \Studiow\Http\Exceptions\ServerError\VariantAlsoNegotiatesException |
| 507 | Insufficient Storage | \Studiow\Http\Exceptions\ServerError\InsufficientStorageException |
| 508 | Loop Detected | \Studiow\Http\Exceptions\ServerError\LoopDetectedException |
| 510 | Not Extended | \Studiow\Http\Exceptions\ServerError\NotExtendedException |
| 511 | Network Authentication Required | \Studiow\Http\Exceptions\ServerError\NetworkAuthenticationRequiredException |
