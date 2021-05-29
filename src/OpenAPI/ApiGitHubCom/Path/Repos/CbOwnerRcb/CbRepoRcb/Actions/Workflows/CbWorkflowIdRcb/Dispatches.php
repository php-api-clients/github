<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatchOperation;

final class Dispatches
{
    function post($owner, $repo, $workflow_id): CreateWorkflowDispatchOperation
    {
        return new CreateWorkflowDispatchOperation($owner, $repo, $workflow_id);
    }
}
