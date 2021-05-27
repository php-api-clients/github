<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Disable
{
    function put($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableWorkflowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableWorkflowOperation($owner, $repo, $workflow_id);
    }
}
