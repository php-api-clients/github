<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRuns;

final class Runs
{
    function get($owner, $repo, $workflow_id, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1): ListWorkflowRuns
    {
        return new ListWorkflowRuns($owner, $repo, $workflow_id, $actor, $branch, $event, $status, $per_page, $page);
    }
}
