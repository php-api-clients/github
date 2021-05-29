<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListStargazersForRepo;

final class Stargazers
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListStargazersForRepo
    {
        return new ListStargazersForRepo($owner, $repo, $per_page, $page);
    }
}