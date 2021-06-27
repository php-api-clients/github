<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

final class CbBuildIdRcb
{
    function get($owner, $repo, $build_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuild($owner, $repo, $build_id);
    }
}
