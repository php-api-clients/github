<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetAllowedActionsRepository;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\SetAllowedActionsRepository;

final class SelectedActions
{
    function get($owner, $repo): GetAllowedActionsRepository
    {
        return new GetAllowedActionsRepository($owner, $repo);
    }

    function put($owner, $repo): SetAllowedActionsRepository
    {
        return new SetAllowedActionsRepository($owner, $repo);
    }
}
