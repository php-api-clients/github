<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb;

final class Archive
{
    function get($org, $migration_id) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\DownloadArchiveForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\DownloadArchiveForOrgOperation($org, $migration_id);
    }
    function delete($org, $migration_id) : \ApiClients\Client\Github\OpenAPI\Operation\Migrations\DeleteArchiveForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Migrations\DeleteArchiveForOrgOperation($org, $migration_id);
    }
}
