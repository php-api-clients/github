<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\CreateWorkflowDispatch;

final class Dispatches
{
    function post($owner, $repo, $workflow_id): CreateWorkflowDispatch
    {
        return new CreateWorkflowDispatch($owner, $repo, $workflow_id);
    }
}
