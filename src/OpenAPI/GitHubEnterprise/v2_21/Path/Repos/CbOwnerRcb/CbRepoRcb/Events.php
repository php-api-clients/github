<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\ListRepoEventsOperation;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListRepoEventsOperation
    {
        return new ListRepoEventsOperation($owner, $repo, $per_page, $page);
    }
}
