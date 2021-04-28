<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb;

final class Lock
{
    function delete($org, $migration_id, $repo_name) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\UnlockRepoForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\UnlockRepoForOrgOperation($org, $migration_id, $repo_name);
    }
}
