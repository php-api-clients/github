<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($project_id, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\GetPermissionForUser($project_id, $username);
    }
}
