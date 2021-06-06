<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows;

final class CbWorkflowIdRcb
{
    function get($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow($owner, $repo, $workflow_id);
    }
}
