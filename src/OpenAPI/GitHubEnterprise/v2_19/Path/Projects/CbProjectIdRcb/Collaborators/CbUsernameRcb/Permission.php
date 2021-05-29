<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\GetPermissionForUserOperation;

final class Permission
{
    function get($project_id, $username): GetPermissionForUserOperation
    {
        return new GetPermissionForUserOperation($project_id, $username);
    }
}
