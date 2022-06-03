<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Collaborators;

final class CbUsernameRcb
{
    function get($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CheckCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\CheckCollaborator($owner, $repo, $username);
    }
    function put($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\AddCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\AddCollaborator($owner, $repo, $username);
    }
    function delete($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\RemoveCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\RemoveCollaborator($owner, $repo, $username);
    }
}
