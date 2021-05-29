<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKeyOperation;

final class PublicDashKey
{
    function get($repository_id, $environment_name): GetEnvironmentPublicKeyOperation
    {
        return new GetEnvironmentPublicKeyOperation($repository_id, $environment_name);
    }
}
