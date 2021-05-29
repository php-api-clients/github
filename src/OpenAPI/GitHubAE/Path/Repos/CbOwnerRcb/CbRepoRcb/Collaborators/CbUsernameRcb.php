<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Collaborators;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddCollaboratorOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\CheckCollaboratorOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveCollaboratorOperation;

final class CbUsernameRcb
{
    function get($owner, $repo, $username): CheckCollaboratorOperation
    {
        return new CheckCollaboratorOperation($owner, $repo, $username);
    }

    function put($owner, $repo, $username): AddCollaboratorOperation
    {
        return new AddCollaboratorOperation($owner, $repo, $username);
    }

    function delete($owner, $repo, $username): RemoveCollaboratorOperation
    {
        return new RemoveCollaboratorOperation($owner, $repo, $username);
    }
}
