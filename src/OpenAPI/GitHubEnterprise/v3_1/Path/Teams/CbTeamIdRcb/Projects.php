<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListProjectsLegacyOperation;

final class Projects
{
    function get($team_id, int $per_page = 30, int $page = 1): ListProjectsLegacyOperation
    {
        return new ListProjectsLegacyOperation($team_id, $per_page, $page);
    }
}
