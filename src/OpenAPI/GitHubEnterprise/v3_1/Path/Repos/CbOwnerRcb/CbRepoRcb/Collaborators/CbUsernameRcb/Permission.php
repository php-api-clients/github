<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Collaborators\CbUsernameRcb;

final class Permission
{
    function get($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCollaboratorPermissionLevelOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCollaboratorPermissionLevelOperation($owner, $repo, $username);
    }
}
