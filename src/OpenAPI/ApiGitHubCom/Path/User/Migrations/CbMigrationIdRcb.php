<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\User\Migrations;

final class CbMigrationIdRcb
{
    function get($migration_id, $exclude) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetStatusForAuthenticatedUserOperation($migration_id, $exclude);
    }
}
