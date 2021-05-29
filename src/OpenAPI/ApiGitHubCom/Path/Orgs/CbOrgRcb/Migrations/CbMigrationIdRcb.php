<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Migrations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg;

final class CbMigrationIdRcb
{
    function get($org, $migration_id, $exclude): GetStatusForOrg
    {
        return new GetStatusForOrg($org, $migration_id, $exclude);
    }
}
