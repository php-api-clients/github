<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Migrations;

final class CbMigrationIdRcb
{
    function get($org, $migration_id, $exclude) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetStatusForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetStatusForOrgOperation($org, $migration_id, $exclude);
    }
}
