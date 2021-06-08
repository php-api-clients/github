<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCollaboratorPermissionLevel;

final class Permission
{
    function get($owner, $repo, $username): GetCollaboratorPermissionLevel
    {
        return new GetCollaboratorPermissionLevel($owner, $repo, $username);
    }
}
