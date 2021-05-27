<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Commits
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateCommitOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateCommitOperation($owner, $repo);
    }
}
