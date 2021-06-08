<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage;

final class Timing
{
    function get($owner, $repo, $workflow_id): GetWorkflowUsage
    {
        return new GetWorkflowUsage($owner, $repo, $workflow_id);
    }
}
