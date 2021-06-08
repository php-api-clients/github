<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Assignees;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\CheckUserCanBeAssigned;

final class CbAssigneeRcb
{
    function get($owner, $repo, $assignee): CheckUserCanBeAssigned
    {
        return new CheckUserCanBeAssigned($owner, $repo, $assignee);
    }
}
