<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\RequiredWorkflows\CbRequiredWorkflowIdForRepoRcb;

final class Runs
{
    function get($owner, $repo, $required_workflow_id_for_repo, $actor, $branch, $event, $status, int $per_page = 30, int $page = 1, $created, bool $exclude_pull_requests = false, $check_suite_id, $head_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflowRuns
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflowRuns($owner, $repo, $required_workflow_id_for_repo, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests, $check_suite_id, $head_sha);
    }
}
