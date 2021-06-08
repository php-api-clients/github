<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListProjectsInOrg;

final class Projects
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1): ListProjectsInOrg
    {
        return new ListProjectsInOrg($org, $team_slug, $per_page, $page);
    }
}
