<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Collaborators;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddCollaborator;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckCollaborator;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveCollaborator;

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
