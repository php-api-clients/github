<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Commits
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\CreateCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\CreateCommitOperation($owner, $repo);
    }
}