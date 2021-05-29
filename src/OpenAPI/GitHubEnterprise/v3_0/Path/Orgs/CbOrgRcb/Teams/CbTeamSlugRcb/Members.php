<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListMembersInOrgOperation;

final class Members
{
    function get($org, $team_slug, string $role = 'all', int $per_page = 30, int $page = 1): ListMembersInOrgOperation
    {
        return new ListMembersInOrgOperation($org, $team_slug, $role, $per_page, $page);
    }
}
