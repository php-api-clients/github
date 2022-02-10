<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Codespaces\Secrets;

final class CbSecretNameRcb
{
    function get($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetSecretForAuthenticatedUser($secret_name);
    }
    function put($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\CreateOrUpdateSecretForAuthenticatedUser($secret_name);
    }
    function delete($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\DeleteSecretForAuthenticatedUser($secret_name);
    }
}
