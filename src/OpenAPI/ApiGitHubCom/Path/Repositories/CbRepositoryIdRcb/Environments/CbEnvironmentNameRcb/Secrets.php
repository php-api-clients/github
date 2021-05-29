<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecretsOperation;

final class Secrets
{
    function get($repository_id, $environment_name, int $per_page = 30, int $page = 1): ListEnvironmentSecretsOperation
    {
        return new ListEnvironmentSecretsOperation($repository_id, $environment_name, $per_page, $page);
    }
}
