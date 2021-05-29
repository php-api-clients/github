<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations\CbMigrationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUser;

final class Archive
{
    function get($migration_id): GetArchiveForAuthenticatedUser
    {
        return new GetArchiveForAuthenticatedUser($migration_id);
    }

    function delete($migration_id): DeleteArchiveForAuthenticatedUser
    {
        return new DeleteArchiveForAuthenticatedUser($migration_id);
    }
}
