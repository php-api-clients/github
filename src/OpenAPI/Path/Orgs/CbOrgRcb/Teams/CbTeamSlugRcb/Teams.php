<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

final class Teams
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListChildInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListChildInOrgOperation($org, $team_slug, $per_page, $page);
    }
}
