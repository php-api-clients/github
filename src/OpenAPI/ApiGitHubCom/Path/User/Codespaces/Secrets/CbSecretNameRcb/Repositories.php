<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Codespaces\Secrets\CbSecretNameRcb;

final class Repositories
{
    function get($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ListRepositoriesForSecretForAuthenticatedUser($secret_name);
    }
    function put($secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\SetRepositoriesForSecretForAuthenticatedUser($secret_name);
    }
}
