<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListEventsForRepoOperation;

final class Events
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListEventsForRepoOperation
    {
        return new ListEventsForRepoOperation($owner, $repo, $per_page, $page);
    }
}
