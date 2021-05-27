<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

final class CbRefRcb
{
    function delete($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRefOperation($owner, $repo, $ref);
    }
    function patch($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRefOperation($owner, $repo, $ref);
    }
}
