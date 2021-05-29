<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListCommitStatusesForRefOperation;

final class Statuses
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1): ListCommitStatusesForRefOperation
    {
        return new ListCommitStatusesForRefOperation($owner, $repo, $ref, $per_page, $page);
    }
}
