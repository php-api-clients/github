<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflowOperation;

final class Disable
{
    function put($owner, $repo, $workflow_id): DisableWorkflowOperation
    {
        return new DisableWorkflowOperation($owner, $repo, $workflow_id);
    }
}
