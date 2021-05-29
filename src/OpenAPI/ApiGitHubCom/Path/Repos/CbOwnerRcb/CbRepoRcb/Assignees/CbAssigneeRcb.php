<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Assignees;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues\CheckUserCanBeAssignedOperation;

final class CbAssigneeRcb
{
    function get($owner, $repo, $assignee): CheckUserCanBeAssignedOperation
    {
        return new CheckUserCanBeAssignedOperation($owner, $repo, $assignee);
    }
}
