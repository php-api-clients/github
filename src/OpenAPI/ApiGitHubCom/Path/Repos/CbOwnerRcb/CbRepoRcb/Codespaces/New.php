<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Codespaces;

final class New
{
    function get($owner, $repo, $ref, $client_ip) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\PreFlightWithRepoForAuthenticatedUser($owner, $repo, $ref, $client_ip);
    }
}
