<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Compare;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CompareCommits;

final class CbBaseheadRcb
{
    function get($owner, $repo, $basehead): CompareCommits
    {
        return new CompareCommits($owner, $repo, $basehead);
    }
}
