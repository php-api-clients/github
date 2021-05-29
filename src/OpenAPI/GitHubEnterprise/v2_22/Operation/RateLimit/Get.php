<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\RateLimit;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Get
{
    private const OPERATION_ID = 'rate-limit/get';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace([], [], '/rate_limit?'));
    }

    function validateResponse(): void
    {
    }
}
