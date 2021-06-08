<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersLegacy;

final class Members
{
    function get($team_id, string $role = 'all', int $per_page = 30, int $page = 1): ListMembersLegacy
    {
        return new ListMembersLegacy($team_id, $role, $per_page, $page);
    }
}
