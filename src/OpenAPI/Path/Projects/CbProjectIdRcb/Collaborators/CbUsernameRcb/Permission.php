<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($project_id, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Projects\GetPermissionForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Projects\GetPermissionForUserOperation($project_id, $username);
    }
}
