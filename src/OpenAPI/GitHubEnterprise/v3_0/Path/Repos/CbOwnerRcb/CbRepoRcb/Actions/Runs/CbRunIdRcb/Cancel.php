<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Cancel
{
    function post($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CancelWorkflowRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\CancelWorkflowRunOperation($owner, $repo, $run_id);
    }
}