<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Readme;

final class CbDirRcb
{
    function get($owner, $repo, $dir, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetReadmeInDirectory
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetReadmeInDirectory($owner, $repo, $dir, $ref);
    }
}
