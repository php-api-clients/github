<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateWebhookConfigForOrg
{
    private const OPERATION_ID = 'orgs/update-webhook-config-for-org';
    public string $org;
    public int $hook_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $hook_id)
    {
        $this->org     = $org;
        $this->hook_id = $hook_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{org}', '{hook_id}'], [$this->org, $this->hook_id], '/orgs/{org}/hooks/{hook_id}/config?'));
    }

    function validateResponse(): void
    {
    }
}
