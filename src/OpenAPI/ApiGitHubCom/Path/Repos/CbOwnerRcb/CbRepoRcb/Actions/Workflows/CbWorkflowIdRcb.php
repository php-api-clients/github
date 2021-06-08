<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow;

final class CbWorkflowIdRcb
{
    function get($owner, $repo, $workflow_id): GetWorkflow
    {
        return new GetWorkflow($owner, $repo, $workflow_id);
    }
}
