<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Projects\CbProjectIdRcb\Collaborators;

final class CbUsernameRcb
{
    function put($project_id, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Projects\AddCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Projects\AddCollaboratorOperation($project_id, $username);
    }
    function delete($project_id, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Projects\RemoveCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Projects\RemoveCollaboratorOperation($project_id, $username);
    }
}
