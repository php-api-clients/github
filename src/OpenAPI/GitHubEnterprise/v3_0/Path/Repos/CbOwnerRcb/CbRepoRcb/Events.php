<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity\ListRepoEvents;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListRepoEvents
    {
        return new ListRepoEvents($owner, $repo, $per_page, $page);
    }
}
