<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreatePreReceiveEnvironment
{
    private const OPERATION_ID = 'enterprise-admin/create-pre-receive-environment';

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct()
    {
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace([], [], '/admin/pre-receive-environments?'));
    }

    function validateResponse(): void
    {
    }
}
