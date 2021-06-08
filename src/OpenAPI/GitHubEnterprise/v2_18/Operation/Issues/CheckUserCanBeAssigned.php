<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckUserCanBeAssigned
{
    private const OPERATION_ID = 'issues/check-user-can-be-assigned';
    public string $owner;
    public string $repo;
    public string $assignee;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $assignee)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->assignee = $assignee;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{assignee}'], [$this->owner, $this->repo, $this->assignee], '/repos/{owner}/{repo}/assignees/{assignee}?'));
    }

    function validateResponse(): void
    {
    }
}
