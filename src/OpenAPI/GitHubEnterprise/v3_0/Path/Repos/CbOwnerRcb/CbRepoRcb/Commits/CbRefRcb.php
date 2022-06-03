<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits;

final class CbRefRcb
{
    function get($owner, $repo, int $page = 1, int $per_page = 30, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetCommit($owner, $repo, $page, $per_page, $ref);
    }
}
