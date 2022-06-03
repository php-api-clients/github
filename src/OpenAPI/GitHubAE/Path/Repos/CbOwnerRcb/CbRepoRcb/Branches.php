<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Branches
{
    function get($owner, $repo, $protected, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListBranches
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListBranches($owner, $repo, $protected, $per_page, $page);
    }
}
