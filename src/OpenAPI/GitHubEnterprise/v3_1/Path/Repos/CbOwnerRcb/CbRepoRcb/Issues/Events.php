<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListEventsForRepo;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListEventsForRepo
    {
        return new ListEventsForRepo($owner, $repo, $per_page, $page);
    }
}
