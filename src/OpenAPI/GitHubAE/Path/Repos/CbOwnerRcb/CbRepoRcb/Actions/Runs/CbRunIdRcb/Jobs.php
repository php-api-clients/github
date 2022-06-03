<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Jobs
{
    function get($owner, $repo, $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRun($owner, $repo, $run_id, $filter, $per_page, $page);
    }
}
