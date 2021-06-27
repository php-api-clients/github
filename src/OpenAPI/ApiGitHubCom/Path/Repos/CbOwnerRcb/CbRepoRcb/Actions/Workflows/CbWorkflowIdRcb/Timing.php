<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Timing
{
    function get($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage($owner, $repo, $workflow_id);
    }
}
