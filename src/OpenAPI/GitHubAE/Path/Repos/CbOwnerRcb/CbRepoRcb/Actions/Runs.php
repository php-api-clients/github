<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunsForRepo;

final class Runs
{
    function get($owner, $repo, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1): ListWorkflowRunsForRepo
    {
        return new ListWorkflowRunsForRepo($owner, $repo, $actor, $branch, $event, $status, $per_page, $page);
    }
}
