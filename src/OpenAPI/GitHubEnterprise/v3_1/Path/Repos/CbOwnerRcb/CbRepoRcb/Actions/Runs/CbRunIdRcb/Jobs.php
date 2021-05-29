<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListJobsForWorkflowRunOperation;

final class Jobs
{
    function get($owner, $repo, $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1): ListJobsForWorkflowRunOperation
    {
        return new ListJobsForWorkflowRunOperation($owner, $repo, $run_id, $filter, $per_page, $page);
    }
}
