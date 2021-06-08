<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteEmailForAuthenticated
{
    private const OPERATION_ID = 'users/delete-email-for-authenticated';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace([], [], '/user/emails?'));
    }

    function validateResponse(): void
    {
    }
}
