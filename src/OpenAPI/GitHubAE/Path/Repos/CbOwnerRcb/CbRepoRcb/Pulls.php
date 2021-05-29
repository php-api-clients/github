<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\Create;

final class Pulls
{
    function get($owner, $repo, string $state = 'open', $head, $base, string $sort = 'created', $direction, int $per_page = 30, int $page = 1): [$owner, $repo, $state, $head, $base, $sort, $direction, $per_page, $page];
}

function post($owner, $repo): Create
{
    return new Create($owner, $repo);
}
}
