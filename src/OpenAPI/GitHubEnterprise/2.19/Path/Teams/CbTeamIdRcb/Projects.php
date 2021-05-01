<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Teams\CbTeamIdRcb;

final class Projects
{
    function get(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\ListProjectsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Teams\ListProjectsOperation($accept, $team_id, $per_page, $page);
    }
}
