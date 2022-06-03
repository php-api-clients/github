<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Tags
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTag
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTag($owner, $repo);
    }
}
