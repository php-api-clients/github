<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\User\Memberships;

final class Orgs
{
    function get($state, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembershipsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembershipsForAuthenticatedUserOperation($state, $per_page, $page);
    }
}
