<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CancelWorkflowRun;

final class Cancel
{
    function post($owner, $repo, $run_id): CancelWorkflowRun
    {
        return new CancelWorkflowRun($owner, $repo, $run_id);
    }
}
