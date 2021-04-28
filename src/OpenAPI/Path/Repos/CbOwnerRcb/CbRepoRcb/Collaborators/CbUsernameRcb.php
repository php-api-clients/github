<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Collaborators;

final class CbUsernameRcb
{
    function get($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\CheckCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\CheckCollaboratorOperation($owner, $repo, $username);
    }
    function put($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddCollaboratorOperation($owner, $repo, $username);
    }
    function delete($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveCollaboratorOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveCollaboratorOperation($owner, $repo, $username);
    }
}
