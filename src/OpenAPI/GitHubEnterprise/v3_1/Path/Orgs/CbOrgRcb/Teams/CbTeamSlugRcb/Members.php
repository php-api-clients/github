<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersInOrg;

final class Members
{
    function get($org, $team_slug, string $role = 'all', int $per_page = 30, int $page = 1): ListMembersInOrg
    {
        return new ListMembersInOrg($org, $team_slug, $role, $per_page, $page);
    }
}
