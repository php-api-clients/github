<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Cancel
{
    function post($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CancelWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CancelWorkflowRun($owner, $repo, $run_id);
    }
}
