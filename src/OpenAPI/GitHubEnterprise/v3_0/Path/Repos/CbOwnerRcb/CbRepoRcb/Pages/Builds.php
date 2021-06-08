<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListPagesBuilds;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\RequestPagesBuild;

final class Builds
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListPagesBuilds
    {
        return new ListPagesBuilds($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): RequestPagesBuild
    {
        return new RequestPagesBuild($owner, $repo);
    }
}
