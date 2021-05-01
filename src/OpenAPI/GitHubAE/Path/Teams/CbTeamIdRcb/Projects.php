<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Teams\CbTeamIdRcb;

final class Projects
{
    function get($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsLegacyOperation($team_id, $per_page, $page);
    }
}
