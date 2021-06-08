<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForOrg;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DownloadArchiveForOrg;

final class Archive
{
    function get($org, $migration_id): DownloadArchiveForOrg
    {
        return new DownloadArchiveForOrg($org, $migration_id);
    }

    function delete($org, $migration_id): DeleteArchiveForOrg
    {
        return new DeleteArchiveForOrg($org, $migration_id);
    }
}
