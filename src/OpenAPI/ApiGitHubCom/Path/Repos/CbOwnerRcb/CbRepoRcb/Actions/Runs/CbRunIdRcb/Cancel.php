<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Cancel
{
    function post($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun($owner, $repo, $run_id);
    }
}
