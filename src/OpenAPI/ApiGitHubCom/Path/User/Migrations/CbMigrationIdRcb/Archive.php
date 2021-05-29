<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations\CbMigrationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\DeleteArchiveForAuthenticatedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\GetArchiveForAuthenticatedUserOperation;

final class Archive
{
    function get($migration_id): GetArchiveForAuthenticatedUserOperation
    {
        return new GetArchiveForAuthenticatedUserOperation($migration_id);
    }

    function delete($migration_id): DeleteArchiveForAuthenticatedUserOperation
    {
        return new DeleteArchiveForAuthenticatedUserOperation($migration_id);
    }
}
