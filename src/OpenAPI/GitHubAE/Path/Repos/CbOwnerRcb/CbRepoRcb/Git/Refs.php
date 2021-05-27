<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Refs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRefOperation($owner, $repo);
    }
}
