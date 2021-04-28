<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Timing
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowRunUsageOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowRunUsageOperation($owner, $repo, $run_id);
    }
}
