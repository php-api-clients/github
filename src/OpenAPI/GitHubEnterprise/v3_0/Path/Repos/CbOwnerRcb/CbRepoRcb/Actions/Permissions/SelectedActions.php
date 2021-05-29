<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetAllowedActionsRepositoryOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\SetAllowedActionsRepositoryOperation;

final class SelectedActions
{
    function get($owner, $repo): GetAllowedActionsRepositoryOperation
    {
        return new GetAllowedActionsRepositoryOperation($owner, $repo);
    }

    function put($owner, $repo): SetAllowedActionsRepositoryOperation
    {
        return new SetAllowedActionsRepositoryOperation($owner, $repo);
    }
}
