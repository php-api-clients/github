<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitOperation;

final class CbRefRcb
{
    function get($owner, $repo, int $page = 1, int $per_page = 30, $ref): GetCommitOperation
    {
        return new GetCommitOperation($owner, $repo, $page, $per_page, $ref);
    }
}
