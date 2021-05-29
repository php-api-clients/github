<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Teams\ListProjects;

final class Projects
{
    function get(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, int $per_page = 30, int $page = 1): ListProjects
    {
        return new ListProjects($accept, $team_id, $per_page, $page);
    }
}
