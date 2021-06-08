<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListJobsForWorkflowRun;

final class Jobs
{
    function get($owner, $repo, $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1): ListJobsForWorkflowRun
    {
        return new ListJobsForWorkflowRun($owner, $repo, $run_id, $filter, $per_page, $page);
    }
}
