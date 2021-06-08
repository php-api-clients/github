<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Compare;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CompareCommits;

final class CbBaseheadRcb
{
    function get($owner, $repo, int $page = 1, int $per_page = 30, $basehead): CompareCommits
    {
        return new CompareCommits($owner, $repo, $page, $per_page, $basehead);
    }
}
