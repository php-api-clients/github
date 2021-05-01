<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class Keys
{
    function get($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployKeysOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployKeysOperation($owner, $repo, $per_page, $page);
    }
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployKeyOperation($owner, $repo);
    }
}