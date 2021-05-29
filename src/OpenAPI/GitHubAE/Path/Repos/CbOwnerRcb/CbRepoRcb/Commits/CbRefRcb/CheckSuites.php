<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListSuitesForRefOperation;

final class CheckSuites
{
    function get($owner, $repo, $ref, $app_id, $check_name, int $per_page = 30, int $page = 1): ListSuitesForRefOperation
    {
        return new ListSuitesForRefOperation($owner, $repo, $ref, $app_id, $check_name, $per_page, $page);
    }
}
