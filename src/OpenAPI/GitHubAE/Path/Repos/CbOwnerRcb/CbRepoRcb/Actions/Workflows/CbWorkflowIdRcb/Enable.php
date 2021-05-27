<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Enable
{
    function put($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableWorkflowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableWorkflowOperation($owner, $repo, $workflow_id);
    }
}
