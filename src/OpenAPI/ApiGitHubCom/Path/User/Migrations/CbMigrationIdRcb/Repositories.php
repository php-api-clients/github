<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\User\Migrations\CbMigrationIdRcb;

final class Repositories
{
    function get($migration_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\ListReposForUserOperation($migration_id, $per_page, $page);
    }
}
