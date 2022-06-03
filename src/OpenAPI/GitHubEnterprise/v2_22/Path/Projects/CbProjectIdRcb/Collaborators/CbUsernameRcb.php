<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Projects\CbProjectIdRcb\Collaborators;

final class CbUsernameRcb
{
    function put($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Projects\AddCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Projects\AddCollaborator($project_id, $username);
    }
    function delete($project_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Projects\RemoveCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Projects\RemoveCollaborator($project_id, $username);
    }
}
