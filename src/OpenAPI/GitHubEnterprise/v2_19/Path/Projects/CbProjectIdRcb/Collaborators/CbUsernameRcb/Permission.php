<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\GetPermissionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Projects\GetPermissionForUser($project_id, $username);
    }
}
