<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Migrations\CbMigrationIdRcb;

final class Repositories
{
    function get($migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\ListReposForAuthenticatedUser($migration_id, $per_page, $page);
    }
}
