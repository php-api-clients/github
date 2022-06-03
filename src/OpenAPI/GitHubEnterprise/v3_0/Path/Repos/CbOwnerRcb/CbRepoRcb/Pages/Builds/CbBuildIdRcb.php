<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

final class CbBuildIdRcb
{
    function get($owner, $repo, $build_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetPagesBuild($owner, $repo, $build_id);
    }
}
