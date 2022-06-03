<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Teams\CbTeamIdRcb;

final class Members
{
    function get($team_id, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\ListMembers
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Teams\ListMembers($team_id, $role, $per_page, $page);
    }
}
