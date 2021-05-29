<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateRelease;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListReleases;

final class Releases
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListReleases
    {
        return new ListReleases($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateRelease
    {
        return new CreateRelease($owner, $repo);
    }
}