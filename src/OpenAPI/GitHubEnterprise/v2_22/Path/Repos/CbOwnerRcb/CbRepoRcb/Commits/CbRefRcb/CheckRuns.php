<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Checks\ListForRef;

final class CheckRuns
{
    function get($owner, $repo, $ref, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1, $app_id): ListForRef
    {
        return new ListForRef($owner, $repo, $ref, $check_name, $status, $filter, $per_page, $page, $app_id);
    }
}
