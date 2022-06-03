<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Runs
{
    function get($owner, $repo, $workflow_id, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1, $created, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRuns
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRuns($owner, $repo, $workflow_id, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests);
    }
}
