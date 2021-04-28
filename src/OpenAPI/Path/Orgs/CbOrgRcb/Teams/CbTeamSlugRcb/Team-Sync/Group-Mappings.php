<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb\Team-Sync;

final class Group-Mappings
{
    function get($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListIdpGroupsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListIdpGroupsInOrgOperation($org, $team_slug);
    }
    function patch($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\CreateOrUpdateIdpGroupConnectionsInOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\CreateOrUpdateIdpGroupConnectionsInOrgOperation($org, $team_slug);
    }
}
