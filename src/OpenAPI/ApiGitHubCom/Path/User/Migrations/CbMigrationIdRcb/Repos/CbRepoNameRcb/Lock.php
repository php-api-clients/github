<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUserOperation;

final class Lock
{
    function delete($migration_id, $repo_name): UnlockRepoForAuthenticatedUserOperation
    {
        return new UnlockRepoForAuthenticatedUserOperation($migration_id, $repo_name);
    }
}
