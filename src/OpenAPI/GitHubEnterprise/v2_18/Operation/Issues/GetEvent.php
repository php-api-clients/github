<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetEvent
{
    private const OPERATION_ID = 'issues/get-event';
    public string $owner;
    public string $repo;
    public int $event_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $event_id)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->event_id = $event_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{event_id}'], [$this->owner, $this->repo, $this->event_id], '/repos/{owner}/{repo}/issues/events/{event_id}?'));
    }

    function validateResponse(): void
    {
    }
}
