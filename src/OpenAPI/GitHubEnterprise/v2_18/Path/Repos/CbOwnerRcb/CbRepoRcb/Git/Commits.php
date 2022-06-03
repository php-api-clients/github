<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Commits
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\CreateCommit($owner, $repo);
    }
}
