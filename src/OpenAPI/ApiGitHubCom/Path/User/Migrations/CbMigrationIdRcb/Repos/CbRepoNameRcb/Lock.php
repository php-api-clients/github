<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb;

final class Lock
{
    function delete($migration_id, $repo_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Migrations\UnlockRepoForAuthenticatedUserOperation($migration_id, $repo_name);
    }
}
