<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Rerun
{
    function post($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ReRunWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ReRunWorkflow($owner, $repo, $run_id);
    }
}
