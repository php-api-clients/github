<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\CreateForRepo;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects\ListForRepo;

final class Projects
{
    function get($owner, $repo, string $state = 'open', int $per_page = 30, int $page = 1): ListForRepo
    {
        return new ListForRepo($owner, $repo, $state, $per_page, $page);
    }

    function post($owner, $repo): CreateForRepo
    {
        return new CreateForRepo($owner, $repo);
    }
}