<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflow;

final class CbWorkflowIdRcb
{
    function get($owner, $repo, $workflow_id): GetWorkflow
    {
        return new GetWorkflow($owner, $repo, $workflow_id);
    }
}