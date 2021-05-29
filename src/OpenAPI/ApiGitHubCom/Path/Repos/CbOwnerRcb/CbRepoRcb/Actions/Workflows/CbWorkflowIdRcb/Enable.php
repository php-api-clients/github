<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow;

final class Enable
{
    function put($owner, $repo, $workflow_id): EnableWorkflow
    {
        return new EnableWorkflow($owner, $repo, $workflow_id);
    }
}
