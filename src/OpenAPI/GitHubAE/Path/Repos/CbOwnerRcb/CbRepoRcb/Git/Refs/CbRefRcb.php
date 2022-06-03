<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

final class CbRefRcb
{
    function delete($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\DeleteRef($owner, $repo, $ref);
    }
    function patch($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\UpdateRef($owner, $repo, $ref);
    }
}
