<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

final class Rerun
{
    function post($owner, $repo, $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun($owner, $repo, $job_id);
    }
}
