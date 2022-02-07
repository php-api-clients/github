<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Codespaces\Secrets;

final class PublicKey
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetPublicKeyForAuthenticatedUser();
    }
}
