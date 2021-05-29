<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetCombinedStatusForRefOperation;

final class Status
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1): GetCombinedStatusForRefOperation
    {
        return new GetCombinedStatusForRefOperation($owner, $repo, $ref, $per_page, $page);
    }
}
