<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListContributors;

final class Contributors
{
    function get($owner, $repo, $anon, int $per_page = 30, int $page = 1): ListContributors
    {
        return new ListContributors($owner, $repo, $anon, $per_page, $page);
    }
}