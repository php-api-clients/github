<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetWebhookConfigForRepo
{
    private const OPERATION_ID = 'repos/get-webhook-config-for-repo';
    public string $owner;
    public string $repo;
    public int $hook_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $hook_id)
    {
        $this->owner   = $owner;
        $this->repo    = $repo;
        $this->hook_id = $hook_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{hook_id}'], [$this->owner, $this->repo, $this->hook_id], '/repos/{owner}/{repo}/hooks/{hook_id}/config?'));
    }

    function validateResponse(): void
    {
    }
}
