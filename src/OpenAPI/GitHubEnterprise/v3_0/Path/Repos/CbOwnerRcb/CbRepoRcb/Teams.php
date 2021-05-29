<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListTeamsOperation;

final class Teams
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListTeamsOperation
    {
        return new ListTeamsOperation($owner, $repo, $per_page, $page);
    }
}
