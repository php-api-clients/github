<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Workflows\CbWorkflowIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflowOperation;

final class Enable
{
    function put($owner, $repo, $workflow_id): EnableWorkflowOperation
    {
        return new EnableWorkflowOperation($owner, $repo, $workflow_id);
    }
}
