<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Codespaces\Secrets;

final class PublicKey
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetRepoPublicKey($owner, $repo);
    }
}
