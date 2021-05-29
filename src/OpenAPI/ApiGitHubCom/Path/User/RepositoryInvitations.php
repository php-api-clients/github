<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitationsForAuthenticatedUserOperation;

final class RepositoryInvitations
{
    function get(int $per_page = 30, int $page = 1): ListInvitationsForAuthenticatedUserOperation
    {
        return new ListInvitationsForAuthenticatedUserOperation($per_page, $page);
    }
}
