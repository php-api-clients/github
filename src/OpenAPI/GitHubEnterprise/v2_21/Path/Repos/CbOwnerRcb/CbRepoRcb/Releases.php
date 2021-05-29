<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\CreateReleaseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListReleasesOperation;

final class Releases
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListReleasesOperation
    {
        return new ListReleasesOperation($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): CreateReleaseOperation
    {
        return new CreateReleaseOperation($owner, $repo);
    }
}
