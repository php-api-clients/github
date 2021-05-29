<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\ListStargazersForRepoOperation;

final class Stargazers
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListStargazersForRepoOperation
    {
        return new ListStargazersForRepoOperation($owner, $repo, $per_page, $page);
    }
}
