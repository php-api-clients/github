<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repositories\CbRepositoryIdRcb\Environments\CbEnvironmentNameRcb\Secrets;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey;

final class PublicDashKey
{
    function get($repository_id, $environment_name): GetEnvironmentPublicKey
    {
        return new GetEnvironmentPublicKey($repository_id, $environment_name);
    }
}
