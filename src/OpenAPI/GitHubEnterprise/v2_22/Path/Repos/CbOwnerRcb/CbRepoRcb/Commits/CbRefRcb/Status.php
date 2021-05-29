<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetCombinedStatusForRef;

final class Status
{
    function get($owner, $repo, $ref, int $per_page = 30, int $page = 1): GetCombinedStatusForRef
    {
        return new GetCombinedStatusForRef($owner, $repo, $ref, $per_page, $page);
    }
}
