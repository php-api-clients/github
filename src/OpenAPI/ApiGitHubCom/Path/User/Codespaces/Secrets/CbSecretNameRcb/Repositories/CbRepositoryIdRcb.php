<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Codespaces\Secrets\CbSecretNameRcb\Repositories;

final class CbRepositoryIdRcb
{
    function put($secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\AddRepositoryForSecretForAuthenticatedUser($secret_name, $repository_id);
    }
    function delete($secret_name, $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\RemoveRepositoryForSecretForAuthenticatedUser($secret_name, $repository_id);
    }
}
