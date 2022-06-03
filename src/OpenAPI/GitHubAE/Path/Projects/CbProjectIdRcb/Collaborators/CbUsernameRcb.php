<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Projects\CbProjectIdRcb\Collaborators;

final class CbUsernameRcb
{
    function put($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\AddCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\AddCollaborator($project_id, $username);
    }
    function delete($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\RemoveCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects\RemoveCollaborator($project_id, $username);
    }
}
