<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\ListWorkflowRunsOperation;

final class Runs
{
    function get($owner, $repo, $workflow_id, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1): ListWorkflowRunsOperation
    {
        return new ListWorkflowRunsOperation($owner, $repo, $workflow_id, $actor, $branch, $event, $status, $per_page, $page);
    }
}
