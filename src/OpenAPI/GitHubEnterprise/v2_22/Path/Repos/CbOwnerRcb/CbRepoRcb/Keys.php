<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CreateDeployKey;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\ListDeployKeys;

final class Keys
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListDeployKeys
    {
        return new ListDeployKeys($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateDeployKey
    {
        return new CreateDeployKey($owner, $repo);
    }
}
