<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListLabelsForMilestone
{
    private const OPERATION_ID = 'issues/list-labels-for-milestone';
    public string $owner;
    public string $repo;
    /**milestone_number parameter**/
    public int $milestone_number;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $milestone_number, int $per_page = 30, int $page = 1)
    {
        $this->owner            = $owner;
        $this->repo             = $repo;
        $this->milestone_number = $milestone_number;
        $this->per_page         = $per_page;
        $this->page             = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{milestone_number}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->milestone_number, $this->per_page, $this->page], '/repos/{owner}/{repo}/milestones/{milestone_number}/labels?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
