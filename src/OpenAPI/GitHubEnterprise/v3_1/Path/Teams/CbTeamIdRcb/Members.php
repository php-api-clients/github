<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Teams\CbTeamIdRcb;

final class Members
{
    function get($team_id, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersLegacyOperation($team_id, $role, $per_page, $page);
    }
}
