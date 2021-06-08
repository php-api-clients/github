<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RevokeInstallationAccessToken
{
    private const OPERATION_ID = 'apps/revoke-installation-access-token';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace([], [], '/installation/token?'));
    }

    function validateResponse(): void
    {
    }
}
