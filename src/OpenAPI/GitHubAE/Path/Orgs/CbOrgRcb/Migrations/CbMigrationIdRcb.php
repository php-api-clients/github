<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Migrations;

final class CbMigrationIdRcb
{
    function get($org, $migration_id, $exclude) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetStatusForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetStatusForOrg($org, $migration_id, $exclude);
    }
}
