<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListProjectsOperation;

final class Projects
{
    function get(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, int $per_page = 30, int $page = 1): ListProjectsOperation
    {
        return new ListProjectsOperation($accept, $team_id, $per_page, $page);
    }
}
