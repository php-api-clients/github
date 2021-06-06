<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Environments
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments($owner, $repo);
    }
}
