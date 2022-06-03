<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Refs;

final class CbRefRcb
{
    function delete($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\DeleteRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\DeleteRef($owner, $repo, $ref);
    }
    function patch($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\UpdateRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\UpdateRef($owner, $repo, $ref);
    }
}
