<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\Create;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\ListForRepo;

final class Issues
{
    function get($owner, $repo, $milestone, string $state = 'open', $assignee, $creator, $mentioned, $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1): ListForRepo
    {
        return new ListForRepo($owner, $repo, $milestone, $state, $assignee, $creator, $mentioned, $labels, $sort, $direction, $since, $per_page, $page);
    }

    function post($owner, $repo): Create
    {
        return new Create($owner, $repo);
    }
}
