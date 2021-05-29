<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetCommit;

final class CbRefRcb
{
    function get($owner, $repo, int $page = 1, int $per_page = 30, $ref): GetCommit
    {
        return new GetCommit($owner, $repo, $page, $per_page, $ref);
    }
}
