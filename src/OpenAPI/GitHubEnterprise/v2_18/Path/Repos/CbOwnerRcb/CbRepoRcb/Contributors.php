<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\ListContributorsOperation;

final class Contributors
{
    function get($owner, $repo, $anon, int $per_page = 30, int $page = 1): ListContributorsOperation
    {
        return new ListContributorsOperation($owner, $repo, $anon, $per_page, $page);
    }
}
