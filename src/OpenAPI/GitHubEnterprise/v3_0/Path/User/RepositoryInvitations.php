<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListInvitationsForAuthenticatedUser;

final class RepositoryInvitations
{
    function get(int $per_page = 30, int $page = 1): ListInvitationsForAuthenticatedUser
    {
        return new ListInvitationsForAuthenticatedUser($per_page, $page);
    }
}
