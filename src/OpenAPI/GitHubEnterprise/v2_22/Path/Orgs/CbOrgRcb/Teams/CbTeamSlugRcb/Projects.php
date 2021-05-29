<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Teams\ListProjectsInOrgOperation;

final class Projects
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1): ListProjectsInOrgOperation
    {
        return new ListProjectsInOrgOperation($org, $team_slug, $per_page, $page);
    }
}
