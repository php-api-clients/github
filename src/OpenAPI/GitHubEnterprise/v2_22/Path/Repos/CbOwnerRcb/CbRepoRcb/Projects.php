<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Projects\CreateForRepoOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Projects\ListForRepoOperation;

final class Projects
{
    function get($owner, $repo, string $state = 'open', int $per_page = 30, int $page = 1): ListForRepoOperation
    {
        return new ListForRepoOperation($owner, $repo, $state, $per_page, $page);
    }

    function post($owner, $repo): CreateForRepoOperation
    {
        return new CreateForRepoOperation($owner, $repo);
    }
}
