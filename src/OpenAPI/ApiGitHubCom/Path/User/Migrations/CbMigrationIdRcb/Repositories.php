<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations\CbMigrationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForUser;

final class Repositories
{
    function get($migration_id, int $per_page = 30, int $page = 1): ListReposForUser
    {
        return new ListReposForUser($migration_id, $per_page, $page);
    }
}
