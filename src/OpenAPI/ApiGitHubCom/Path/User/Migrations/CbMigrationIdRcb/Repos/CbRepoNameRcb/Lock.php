<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUser;

final class Lock
{
    function delete($migration_id, $repo_name): UnlockRepoForAuthenticatedUser
    {
        return new UnlockRepoForAuthenticatedUser($migration_id, $repo_name);
    }
}
