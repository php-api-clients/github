<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets;

final class Secrets
{
    function get($repository_id, $environment_name, int $per_page = 30, int $page = 1): ListEnvironmentSecrets
    {
        return new ListEnvironmentSecrets($repository_id, $environment_name, $per_page, $page);
    }
}
