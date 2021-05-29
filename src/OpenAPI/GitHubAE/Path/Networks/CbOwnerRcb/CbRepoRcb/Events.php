<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Networks\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListPublicEventsForRepoNetwork;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListPublicEventsForRepoNetwork
    {
        return new ListPublicEventsForRepoNetwork($owner, $repo, $per_page, $page);
    }
}
