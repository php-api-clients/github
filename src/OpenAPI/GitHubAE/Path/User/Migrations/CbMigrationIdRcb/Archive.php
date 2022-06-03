<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User\Migrations\CbMigrationIdRcb;

final class Archive
{
    function get($migration_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Migrations\GetArchiveForAuthenticatedUser($migration_id);
    }
}
