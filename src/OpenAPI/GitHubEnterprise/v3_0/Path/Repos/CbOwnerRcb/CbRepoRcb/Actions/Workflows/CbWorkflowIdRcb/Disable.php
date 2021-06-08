<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DisableWorkflow;

final class Disable
{
    function put($owner, $repo, $workflow_id): DisableWorkflow
    {
        return new DisableWorkflow($owner, $repo, $workflow_id);
    }
}
