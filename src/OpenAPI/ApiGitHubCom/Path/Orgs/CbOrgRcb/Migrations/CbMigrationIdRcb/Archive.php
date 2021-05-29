<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrgOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrgOperation;

final class Archive
{
    function get($org, $migration_id): DownloadArchiveForOrgOperation
    {
        return new DownloadArchiveForOrgOperation($org, $migration_id);
    }

    function delete($org, $migration_id): DeleteArchiveForOrgOperation
    {
        return new DeleteArchiveForOrgOperation($org, $migration_id);
    }
}
