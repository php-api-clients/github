<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Projects
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsInOrgOperation($org, $team_slug, $per_page, $page);
    }
}