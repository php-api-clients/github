<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs;

final class CbJobIdRcb
{
    function get($owner, $repo, $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun($owner, $repo, $job_id);
    }
}
