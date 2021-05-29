<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects\GetPermissionForUser;

final class Permission
{
    function get($project_id, $username): GetPermissionForUser
    {
        return new GetPermissionForUser($project_id, $username);
    }
}
