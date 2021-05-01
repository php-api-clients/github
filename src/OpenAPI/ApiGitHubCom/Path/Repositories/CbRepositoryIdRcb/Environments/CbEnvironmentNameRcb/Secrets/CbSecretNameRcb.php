<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

final class CbSecretNameRcb
{
    function get($repository_id, $environment_name, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecretOperation($repository_id, $environment_name, $secret_name);
    }
    function put($repository_id, $environment_name, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecretOperation($repository_id, $environment_name, $secret_name);
    }
    function delete($repository_id, $environment_name, $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecretOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecretOperation($repository_id, $environment_name, $secret_name);
    }
}
