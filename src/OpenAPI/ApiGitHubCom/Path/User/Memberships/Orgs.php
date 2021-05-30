<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Memberships;

final class Orgs
{
    function get($state, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser($state, $per_page, $page);
    }
}
