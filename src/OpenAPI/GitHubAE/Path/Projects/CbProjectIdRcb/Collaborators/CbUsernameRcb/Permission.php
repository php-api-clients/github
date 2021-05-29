<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetPermissionForUserOperation;

final class Permission
{
    function get($project_id, $username): GetPermissionForUserOperation
    {
        return new GetPermissionForUserOperation($project_id, $username);
    }
}
