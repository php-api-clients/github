<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Projects\CbProjectIdRcb\Collaborators;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\AddCollaborator;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects\RemoveCollaborator;

final class CbUsernameRcb
{
    function put($project_id, $username): AddCollaborator
    {
        return new AddCollaborator($project_id, $username);
    }

    function delete($project_id, $username): RemoveCollaborator
    {
        return new RemoveCollaborator($project_id, $username);
    }
}
