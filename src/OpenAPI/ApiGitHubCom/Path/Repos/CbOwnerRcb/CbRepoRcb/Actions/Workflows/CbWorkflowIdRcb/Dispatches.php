<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Dispatches
{
    function post($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch($owner, $repo, $workflow_id);
    }
}
