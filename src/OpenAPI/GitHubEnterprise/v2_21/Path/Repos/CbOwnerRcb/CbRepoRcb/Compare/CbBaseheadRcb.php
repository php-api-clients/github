<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Compare;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\CompareCommitsOperation;

final class CbBaseheadRcb
{
    function get($owner, $repo, $basehead): CompareCommitsOperation
    {
        return new CompareCommitsOperation($owner, $repo, $basehead);
    }
}
