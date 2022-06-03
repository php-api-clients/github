<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class RepositoryInvitations
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListInvitationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListInvitationsForAuthenticatedUser($per_page, $page);
    }
}
