<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetAllAuthorizedSshKeys
{
    private const OPERATION_ID = 'enterprise-admin/get-all-authorized-ssh-keys';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace([], [], '/setup/api/settings/authorized-keys?'));
    }

    function validateResponse(): void
    {
    }
}
