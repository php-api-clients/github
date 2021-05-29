<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret;

final class CbSecretNameRcb
{
    function get($repository_id, $environment_name, $secret_name): GetEnvironmentSecret
    {
        return new GetEnvironmentSecret($repository_id, $environment_name, $secret_name);
    }

    function put($repository_id, $environment_name, $secret_name): CreateOrUpdateEnvironmentSecret
    {
        return new CreateOrUpdateEnvironmentSecret($repository_id, $environment_name, $secret_name);
    }

    function delete($repository_id, $environment_name, $secret_name): DeleteEnvironmentSecret
    {
        return new DeleteEnvironmentSecret($repository_id, $environment_name, $secret_name);
    }
}
