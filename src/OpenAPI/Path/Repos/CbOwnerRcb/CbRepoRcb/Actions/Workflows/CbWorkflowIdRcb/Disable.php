<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Disable
{
    function put($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DisableWorkflowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DisableWorkflowOperation($owner, $repo, $workflow_id);
    }
}
