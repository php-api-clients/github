<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\CreateForkOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListForksOperation;

final class Forks
{
    function get($owner, $repo, string $sort = 'newest', int $per_page = 30, int $page = 1): ListForksOperation
    {
        return new ListForksOperation($owner, $repo, $sort, $per_page, $page);
    }

    function post($owner, $repo): CreateForkOperation
    {
        return new CreateForkOperation($owner, $repo);
    }
}
