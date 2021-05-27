<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRefOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetRefOperation($owner, $repo, $ref);
    }
}
