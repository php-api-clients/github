<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetPrimaryEmailVisibilityForAuthenticated
{
    private const OPERATION_ID = 'users/set-primary-email-visibility-for-authenticated';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace([], [], '/user/email/visibility?'));
    }

    function validateResponse(): void
    {
    }
}
