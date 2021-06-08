<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs\ListMembershipsForAuthenticatedUser;

final class Orgs
{
    function get($state, int $per_page = 30, int $page = 1): ListMembershipsForAuthenticatedUser
    {
        return new ListMembershipsForAuthenticatedUser($state, $per_page, $page);
    }
}
