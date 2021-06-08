<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForOrg;

final class Lock
{
    function delete($org, $migration_id, $repo_name): UnlockRepoForOrg
    {
        return new UnlockRepoForOrg($org, $migration_id, $repo_name);
    }
}
