<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Dispatches
{
    function post($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateWorkflowDispatchOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateWorkflowDispatchOperation($owner, $repo, $workflow_id);
    }
}
