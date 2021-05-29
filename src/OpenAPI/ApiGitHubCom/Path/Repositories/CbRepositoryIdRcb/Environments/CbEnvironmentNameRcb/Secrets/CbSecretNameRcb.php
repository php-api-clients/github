<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecretOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecretOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecretOperation;

final class CbSecretNameRcb
{
    function get($repository_id, $environment_name, $secret_name): GetEnvironmentSecretOperation
    {
        return new GetEnvironmentSecretOperation($repository_id, $environment_name, $secret_name);
    }

    function put($repository_id, $environment_name, $secret_name): CreateOrUpdateEnvironmentSecretOperation
    {
        return new CreateOrUpdateEnvironmentSecretOperation($repository_id, $environment_name, $secret_name);
    }

    function delete($repository_id, $environment_name, $secret_name): DeleteEnvironmentSecretOperation
    {
        return new DeleteEnvironmentSecretOperation($repository_id, $environment_name, $secret_name);
    }
}
