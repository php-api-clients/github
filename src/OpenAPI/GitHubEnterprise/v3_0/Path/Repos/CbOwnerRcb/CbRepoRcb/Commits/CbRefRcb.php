<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetCommitOperation;

final class CbRefRcb
{
    function get($owner, $repo, int $page = 1, int $per_page = 30, $ref): GetCommitOperation
    {
        return new GetCommitOperation($owner, $repo, $page, $per_page, $ref);
    }
}
