<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowOperation;

final class CbWorkflowIdRcb
{
    function get($owner, $repo, $workflow_id): GetWorkflowOperation
    {
        return new GetWorkflowOperation($owner, $repo, $workflow_id);
    }
}
