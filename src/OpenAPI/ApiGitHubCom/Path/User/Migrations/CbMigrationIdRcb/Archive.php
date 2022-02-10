<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations\CbMigrationIdRcb;

final class Archive
{
    function get($migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser($migration_id);
    }
    function delete($migration_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser($migration_id);
    }
}
