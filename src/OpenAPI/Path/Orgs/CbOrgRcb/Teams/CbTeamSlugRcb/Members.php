<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Members
{
    function get($org, $team_slug, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListMembersInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListMembersInOrgOperation($org, $team_slug, $role, $per_page, $page);
    }
}
