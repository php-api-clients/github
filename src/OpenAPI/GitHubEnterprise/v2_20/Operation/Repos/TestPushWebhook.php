<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class TestPushWebhook
{
    private const OPERATION_ID = 'repos/test-push-webhook';
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
        return new Request('post', str_replace(['{owner}', '{repo}', '{hook_id}'], [$this->owner, $this->repo, $this->hook_id], '/repos/{owner}/{repo}/hooks/{hook_id}/tests?'));
    }

    function validateResponse(): void
    {
    }
}
