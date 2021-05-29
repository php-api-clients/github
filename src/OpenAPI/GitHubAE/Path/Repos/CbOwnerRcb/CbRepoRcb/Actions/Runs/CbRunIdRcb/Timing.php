<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunUsage;

final class Timing
{
    function get($owner, $repo, $run_id): GetWorkflowRunUsage
    {
        return new GetWorkflowRunUsage($owner, $repo, $run_id);
    }
}
