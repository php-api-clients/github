<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

final class Runs
{
    function get($owner, $repo, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1, $created, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunsForRepo($owner, $repo, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests);
    }
}
