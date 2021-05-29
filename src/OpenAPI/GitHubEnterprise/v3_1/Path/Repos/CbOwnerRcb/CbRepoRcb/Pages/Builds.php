<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPagesBuildsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RequestPagesBuildOperation;

final class Builds
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListPagesBuildsOperation
    {
        return new ListPagesBuildsOperation($owner, $repo, $per_page, $page);
    }

    function post($owner, $repo): RequestPagesBuildOperation
    {
        return new RequestPagesBuildOperation($owner, $repo);
    }
}
