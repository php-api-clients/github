<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues\ListAssigneesOperation;

final class Assignees
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListAssigneesOperation
    {
        return new ListAssigneesOperation($owner, $repo, $per_page, $page);
    }
}
