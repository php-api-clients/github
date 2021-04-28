<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb;

final class Repositories
{
    function get($org, $migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\ListReposForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\ListReposForOrgOperation($org, $migration_id, $per_page, $page);
    }
}
