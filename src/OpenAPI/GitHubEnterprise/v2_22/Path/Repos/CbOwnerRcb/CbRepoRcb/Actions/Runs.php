<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

final class Runs
{
    function get($owner, $repo, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListWorkflowRunsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\ListWorkflowRunsForRepoOperation($owner, $repo, $actor, $branch, $event, $status, $per_page, $page);
    }
}
