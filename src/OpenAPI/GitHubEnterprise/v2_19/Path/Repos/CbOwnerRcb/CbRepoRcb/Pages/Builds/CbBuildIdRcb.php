<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

final class CbBuildIdRcb
{
    function get($owner, $repo, $build_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPagesBuildOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPagesBuildOperation($owner, $repo, $build_id);
    }
}
