<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAuthenticated
{
    private const OPERATION_ID = 'users/get-authenticated';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace([], [], '/user?'));
    }

    function validateResponse(): void
    {
    }
}
