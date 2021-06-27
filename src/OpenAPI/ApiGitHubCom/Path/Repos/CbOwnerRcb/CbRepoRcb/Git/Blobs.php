<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Blobs
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateBlob
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\CreateBlob($owner, $repo);
    }
}
