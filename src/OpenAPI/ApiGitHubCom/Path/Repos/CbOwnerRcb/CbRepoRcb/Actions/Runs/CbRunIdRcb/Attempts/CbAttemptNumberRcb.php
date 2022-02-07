<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts;

final class CbAttemptNumberRcb
{
    function get($owner, $repo, $run_id, $attempt_number, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt($owner, $repo, $run_id, $attempt_number, $exclude_pull_requests);
    }
}
