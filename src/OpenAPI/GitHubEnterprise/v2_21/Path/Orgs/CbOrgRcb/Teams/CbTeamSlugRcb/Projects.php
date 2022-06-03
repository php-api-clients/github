<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Projects
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\ListProjectsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Teams\ListProjectsInOrg($org, $team_slug, $per_page, $page);
    }
}
