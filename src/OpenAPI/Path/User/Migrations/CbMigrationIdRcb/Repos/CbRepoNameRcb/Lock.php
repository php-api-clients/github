<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb;

final class Lock
{
    function delete($migration_id, $repo_name) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\UnlockRepoForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\UnlockRepoForAuthenticatedUserOperation($migration_id, $repo_name);
    }
}
