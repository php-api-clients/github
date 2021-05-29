<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class PingGlobalWebhook
{
    private const OPERATION_ID = 'enterprise-admin/ping-global-webhook';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public int $hook_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id)
    {
        $this->accept  = $accept;
        $this->hook_id = $hook_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{hook_id}'], [$this->hook_id], '/admin/hooks/{hook_id}/pings?'));
    }

    function validateResponse(): void
    {
    }
}