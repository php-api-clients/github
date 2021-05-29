<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowUsageOperation;

final class Timing
{
    function get($owner, $repo, $workflow_id): GetWorkflowUsageOperation
    {
        return new GetWorkflowUsageOperation($owner, $repo, $workflow_id);
    }
}
