<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\CbProjectIdRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetPermissionForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\GetPermissionForUser($project_id, $username);
    }
}
