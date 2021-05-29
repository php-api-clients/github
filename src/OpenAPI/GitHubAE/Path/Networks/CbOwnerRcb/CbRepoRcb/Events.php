<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Networks\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListPublicEventsForRepoNetworkOperation;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListPublicEventsForRepoNetworkOperation
    {
        return new ListPublicEventsForRepoNetworkOperation($owner, $repo, $per_page, $page);
    }
}
