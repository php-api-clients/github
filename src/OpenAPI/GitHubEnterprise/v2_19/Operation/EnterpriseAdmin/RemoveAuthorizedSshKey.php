<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveAuthorizedSshKey
{
    private const OPERATION_ID = 'enterprise-admin/remove-authorized-ssh-key';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace([], [], '/setup/api/settings/authorized-keys?'));
    }

    function validateResponse(): void
    {
    }
}
