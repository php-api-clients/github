<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCollaboratorPermissionLevel
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCollaboratorPermissionLevel($owner, $repo, $username);
    }
}
