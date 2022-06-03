<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetCollaboratorPermissionLevel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetCollaboratorPermissionLevel($owner, $repo, $username);
    }
}
