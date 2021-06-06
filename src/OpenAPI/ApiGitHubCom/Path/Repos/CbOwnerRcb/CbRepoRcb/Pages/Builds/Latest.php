<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

final class Latest
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestPagesBuild($owner, $repo);
    }
}
