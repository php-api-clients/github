<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateDeployKeyOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListDeployKeysOperation;

final class Keys
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListDeployKeysOperation
    {
        return new ListDeployKeysOperation($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateDeployKeyOperation
    {
        return new CreateDeployKeyOperation($owner, $repo);
    }
}
