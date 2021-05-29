<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUserOperation;

final class CbMigrationIdRcb
{
    function get($migration_id, $exclude): GetStatusForAuthenticatedUserOperation
    {
        return new GetStatusForAuthenticatedUserOperation($migration_id, $exclude);
    }
}
