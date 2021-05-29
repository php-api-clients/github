<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetPermissionForUser;

final class Permission
{
    function get($project_id, $username): GetPermissionForUser
    {
        return new GetPermissionForUser($project_id, $username);
    }
}
