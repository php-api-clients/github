<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Ref;

final class CbRefRcb
{
    function get($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git\GetRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git\GetRef($owner, $repo, $ref);
    }
}
