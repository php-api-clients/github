<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CreateFork;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListForks;

final class Forks
{
    function get($owner, $repo, string $sort = 'newest', int $per_page = 30, int $page = 1): ListForks
    {
        return new ListForks($owner, $repo, $sort, $per_page, $page);
    }

    function post($owner, $repo): CreateFork
    {
        return new CreateFork($owner, $repo);
    }
}
