<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb;

final class Projects
{
    function get($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy($team_id, $per_page, $page);
    }
}
