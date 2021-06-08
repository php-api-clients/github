<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUser;

final class CbMigrationIdRcb
{
    function get($migration_id, $exclude): GetStatusForAuthenticatedUser
    {
        return new GetStatusForAuthenticatedUser($migration_id, $exclude);
    }
}
