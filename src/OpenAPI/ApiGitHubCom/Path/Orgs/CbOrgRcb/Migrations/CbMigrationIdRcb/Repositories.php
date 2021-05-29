<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForOrgOperation;

final class Repositories
{
    function get($org, $migration_id, int $per_page = 30, int $page = 1): ListReposForOrgOperation
    {
        return new ListReposForOrgOperation($org, $migration_id, $per_page, $page);
    }
}
