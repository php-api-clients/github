<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic;

final class Clones
{
    function get($owner, $repo, string $per = 'day') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones($owner, $repo, $per);
    }
}
