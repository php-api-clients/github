<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteMilestone
{
    private const OPERATION_ID = 'issues/delete-milestone';
    public string $owner;
    public string $repo;
    /**milestone_number parameter**/
    public int $milestone_number;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $milestone_number)
    {
        $this->owner            = $owner;
        $this->repo             = $repo;
        $this->milestone_number = $milestone_number;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{milestone_number}'], [$this->owner, $this->repo, $this->milestone_number], '/repos/{owner}/{repo}/milestones/{milestone_number}?'));
    }

    function validateResponse(): void
    {
    }
}