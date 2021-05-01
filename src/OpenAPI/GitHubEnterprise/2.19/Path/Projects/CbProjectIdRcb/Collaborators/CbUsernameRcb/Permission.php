<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\GetPermissionForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Projects\GetPermissionForUserOperation($project_id, $username);
    }
}
