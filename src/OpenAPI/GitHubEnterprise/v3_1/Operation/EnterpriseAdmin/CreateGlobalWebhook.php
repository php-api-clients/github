<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CreateGlobalWebhook
{
    private const OPERATION_ID = 'enterprise-admin/create-global-webhook';
    /**This API is under preview and subject to change.**/
    public string $accept;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.superpro-preview+json')
    {
        $this->accept = $accept;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace([], [], '/admin/hooks?'));
    }

    function validateResponse(): void
    {
    }
}
