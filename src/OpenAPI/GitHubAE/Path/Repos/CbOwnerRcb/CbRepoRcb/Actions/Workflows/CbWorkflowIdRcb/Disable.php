<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Disable
{
    function put($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableWorkflow($owner, $repo, $workflow_id);
    }
}
