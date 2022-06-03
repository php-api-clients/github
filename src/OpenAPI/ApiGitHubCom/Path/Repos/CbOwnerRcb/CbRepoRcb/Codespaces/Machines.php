<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Codespaces;

final class Machines
{
    function get($owner, $repo, $location, $client_ip) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RepoMachinesForAuthenticatedUser($owner, $repo, $location, $client_ip);
    }
}
