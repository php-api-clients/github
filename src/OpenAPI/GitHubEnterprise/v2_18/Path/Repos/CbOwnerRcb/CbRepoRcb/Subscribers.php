<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\ListWatchersForRepo;

final class Subscribers
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListWatchersForRepo
    {
        return new ListWatchersForRepo($owner, $repo, $per_page, $page);
    }
}
