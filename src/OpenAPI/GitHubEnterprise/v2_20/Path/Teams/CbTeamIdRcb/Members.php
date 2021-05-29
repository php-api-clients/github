<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\ListMembersOperation;

final class Members
{
    function get($team_id, string $role = 'all', int $per_page = 30, int $page = 1): ListMembersOperation
    {
        return new ListMembersOperation($team_id, $role, $per_page, $page);
    }
}
