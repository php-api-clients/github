<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Collaborators;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddCollaborator;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CheckCollaborator;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveCollaborator;

final class CbUsernameRcb
{
    function get($owner, $repo, $username): CheckCollaborator
    {
        return new CheckCollaborator($owner, $repo, $username);
    }

    function put($owner, $repo, $username): AddCollaborator
    {
        return new AddCollaborator($owner, $repo, $username);
    }

    function delete($owner, $repo, $username): RemoveCollaborator
    {
        return new RemoveCollaborator($owner, $repo, $username);
    }
}