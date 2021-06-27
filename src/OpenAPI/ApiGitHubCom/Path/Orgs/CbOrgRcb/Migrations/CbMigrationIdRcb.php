<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Migrations;

final class CbMigrationIdRcb
{
    function get($org, $migration_id, $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForOrg($org, $migration_id, $exclude);
    }
}
