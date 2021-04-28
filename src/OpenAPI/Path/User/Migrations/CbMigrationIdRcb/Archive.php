<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User\Migrations\CbMigrationIdRcb;

final class Archive
{
    function get($migration_id) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetArchiveForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\GetArchiveForAuthenticatedUserOperation($migration_id);
    }
    function delete($migration_id) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\DeleteArchiveForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\DeleteArchiveForAuthenticatedUserOperation($migration_id);
    }
}
