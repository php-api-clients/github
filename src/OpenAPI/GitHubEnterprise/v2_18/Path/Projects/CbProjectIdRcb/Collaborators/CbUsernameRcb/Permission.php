<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects\GetPermissionForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects\GetPermissionForUserOperation($project_id, $username);
    }
}
