<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Blobs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateBlob($owner, $repo);
    }
}
