<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ReRunWorkflow;

final class Rerun
{
    function post($owner, $repo, $run_id): ReRunWorkflow
    {
        return new ReRunWorkflow($owner, $repo, $run_id);
    }
}
