<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Refs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateRef($owner, $repo);
    }
}
