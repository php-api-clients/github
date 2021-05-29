<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User\Memberships;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Orgs\ListMembershipsForAuthenticatedUserOperation;

final class Orgs
{
    function get($state, int $per_page = 30, int $page = 1): ListMembershipsForAuthenticatedUserOperation
    {
        return new ListMembershipsForAuthenticatedUserOperation($state, $per_page, $page);
    }
}
