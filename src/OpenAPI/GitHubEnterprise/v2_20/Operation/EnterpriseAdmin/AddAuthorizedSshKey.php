<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AddAuthorizedSshKey
{
    private const OPERATION_ID = 'enterprise-admin/add-authorized-ssh-key';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace([], [], '/setup/api/settings/authorized-keys?'));
    }

    function validateResponse(): void
    {
    }
}
