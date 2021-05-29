<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\CreateOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\ListOperation;

final class Pulls
{
    function get($owner, $repo, string $state = 'open', $head, $base, string $sort = 'created', $direction, int $per_page = 30, int $page = 1): ListOperation
    {
        return new ListOperation($owner, $repo, $state, $head, $base, $sort, $direction, $per_page, $page);
    }

    function post($owner, $repo): CreateOperation
    {
        return new CreateOperation($owner, $repo);
    }
}
