<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb;

final class Jobs
{
    function get($owner, $repo, $run_id, $attempt_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRunAttempt
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRunAttempt($owner, $repo, $run_id, $attempt_number, $per_page, $page);
    }
}
