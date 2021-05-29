<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsRepository;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsRepository;

final class Permissions
{
    function get($owner, $repo): GetGithubActionsPermissionsRepository
    {
        return new GetGithubActionsPermissionsRepository($owner, $repo);
    }

    function put($owner, $repo): SetGithubActionsPermissionsRepository
    {
        return new SetGithubActionsPermissionsRepository($owner, $repo);
    }
}
