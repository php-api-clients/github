<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows;

final class CbWorkflowIdRcb
{
    function get($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowOperation($owner, $repo, $workflow_id);
    }
}
