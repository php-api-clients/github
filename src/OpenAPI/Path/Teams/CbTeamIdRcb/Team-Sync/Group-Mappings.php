<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Teams\CbTeamIdRcb\Team-Sync;

final class Group-Mappings
{
    function get($team_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListIdpGroupsForLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\ListIdpGroupsForLegacyOperation($team_id);
    }
    function patch($team_id) : \ApiClients\Client\Github\OpenAPI\Operation\Teams\CreateOrUpdateIdpGroupConnectionsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Teams\CreateOrUpdateIdpGroupConnectionsLegacyOperation($team_id);
    }
}
