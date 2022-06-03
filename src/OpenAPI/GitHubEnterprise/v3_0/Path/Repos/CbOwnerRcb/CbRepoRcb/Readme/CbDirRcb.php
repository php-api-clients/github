<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Readme;

final class CbDirRcb
{
    function get($owner, $repo, $dir, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetReadmeInDirectory
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetReadmeInDirectory($owner, $repo, $dir, $ref);
    }
}
