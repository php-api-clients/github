<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Networks\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListPublicEventsForRepoNetworkOperation;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListPublicEventsForRepoNetworkOperation
    {
        return new ListPublicEventsForRepoNetworkOperation($owner, $repo, $per_page, $page);
    }
}
