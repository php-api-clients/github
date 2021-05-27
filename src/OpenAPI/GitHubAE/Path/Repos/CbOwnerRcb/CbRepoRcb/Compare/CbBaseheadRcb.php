<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Compare;

final class CbBaseheadRcb
{
    function get($owner, $repo, int $page = 1, int $per_page = 30, $basehead) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CompareCommitsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CompareCommitsOperation($owner, $repo, $page, $per_page, $basehead);
    }
}
