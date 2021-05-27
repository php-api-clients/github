<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Teams\CbTeamIdRcb\TeamDashSync;

final class GroupDashMappings
{
    function get($team_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsForLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListIdpGroupsForLegacyOperation($team_id);
    }
    function patch($team_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsLegacyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateOrUpdateIdpGroupConnectionsLegacyOperation($team_id);
    }
}
