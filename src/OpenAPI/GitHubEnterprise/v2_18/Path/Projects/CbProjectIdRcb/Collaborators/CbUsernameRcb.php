<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\\Projects\CbProjectIdRcb\Collaborators;

final class CbUsernameRcb
{
    function put($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects\AddCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects\AddCollaboratorOperation($project_id, $username);
    }
    function delete($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects\RemoveCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects\RemoveCollaboratorOperation($project_id, $username);
    }
}
