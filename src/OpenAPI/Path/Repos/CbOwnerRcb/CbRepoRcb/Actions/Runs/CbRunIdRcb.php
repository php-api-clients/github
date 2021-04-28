<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs;

final class CbRunIdRcb
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetWorkflowRunOperation($owner, $repo, $run_id);
    }
    function delete($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteWorkflowRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DeleteWorkflowRunOperation($owner, $repo, $run_id);
    }
}
