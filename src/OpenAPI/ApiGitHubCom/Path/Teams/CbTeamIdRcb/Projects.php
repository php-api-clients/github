<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy;

final class Projects
{
    function get($team_id, int $per_page = 30, int $page = 1): ListProjectsLegacy
    {
        return new ListProjectsLegacy($team_id, $per_page, $page);
    }
}
