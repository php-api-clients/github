<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Timing
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunUsage
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunUsage($owner, $repo, $run_id);
    }
}
