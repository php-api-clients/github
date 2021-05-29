<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Projects\CbProjectIdRcb\Collaborators;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\AddCollaboratorOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Projects\RemoveCollaboratorOperation;

final class CbUsernameRcb
{
    function put($project_id, $username): AddCollaboratorOperation
    {
        return new AddCollaboratorOperation($project_id, $username);
    }

    function delete($project_id, $username): RemoveCollaboratorOperation
    {
        return new RemoveCollaboratorOperation($project_id, $username);
    }
}
