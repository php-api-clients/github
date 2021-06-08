<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetRestrictionsForAuthenticatedUser
{
    private const OPERATION_ID = 'interactions/set-restrictions-for-authenticated-user';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace([], [], '/user/interaction-limits?'));
    }

    function validateResponse(): void
    {
    }
}
