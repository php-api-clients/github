<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class RepositoryInvitations
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListInvitationsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\ListInvitationsForAuthenticatedUserOperation($per_page, $page);
    }
}
