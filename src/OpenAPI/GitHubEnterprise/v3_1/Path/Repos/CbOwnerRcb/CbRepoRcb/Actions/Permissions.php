<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsRepositoryOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsRepositoryOperation;

final class Permissions
{
    function get($owner, $repo): GetGithubActionsPermissionsRepositoryOperation
    {
        return new GetGithubActionsPermissionsRepositoryOperation($owner, $repo);
    }

    function put($owner, $repo): SetGithubActionsPermissionsRepositoryOperation
    {
        return new SetGithubActionsPermissionsRepositoryOperation($owner, $repo);
    }
}
