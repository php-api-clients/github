<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitStatusesForRefOperation;

final class Statuses
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1): ListCommitStatusesForRefOperation
    {
        return new ListCommitStatusesForRefOperation($owner, $repo, $ref, $per_page, $page);
    }
}
