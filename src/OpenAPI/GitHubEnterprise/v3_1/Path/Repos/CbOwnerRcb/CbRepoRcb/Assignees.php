<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListAssignees;

final class Assignees
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListAssignees
    {
        return new ListAssignees($owner, $repo, $per_page, $page);
    }
}