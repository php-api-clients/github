<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic;

final class Views
{
    function get($owner, $repo, string $per = 'day') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViews
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViews($owner, $repo, $per);
    }
}
