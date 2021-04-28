<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

final class Timing
{
    function get($owner, $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowUsageOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowUsageOperation($owner, $repo, $workflow_id);
    }
}
